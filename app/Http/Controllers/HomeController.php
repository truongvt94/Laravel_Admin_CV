<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Cv;
use App\Models\Company;
use App\Models\CvSkill;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\University;
use App\Models\WorkExperince;
use App\Http\Requests\Admin\CreateCvRequest;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cvs = Cv::where('user_id', Auth::user()->id)->get();
        return view('admin.home.main', compact('cvs'));
    }

    public function create()
    {
        return view('cv.create');
    }

    public function store(CreateCvRequest $request)
    {
        $images = '';
        $avatar = '';
        if($request->hasFile('images')) {
           $fileEx = '.'.$request->images->extension();
           $imgName = 'img'.uniqid().$fileEx;
           $request->file('images')->move(public_path('images'), $imgName);
           $images = $imgName;
       }
       if($request->hasFile('avatar')) {
           $fileEx = '.'.$request->avatar->extension();
           $imgName = 'img'.uniqid().$fileEx;
           $request->file('avatar')->move(public_path('images'), $imgName);
           $avatar = $imgName;
       }
       Cv::create([
           'name' => $request->name,
           'slug' => str_slug($request->name),
           'phone' => $request->phone,
           'email' => $request->email,
           'date' => $request->date,
           'facebook' => $request->facebook,
           'skype' => $request->skype,
           'chartwork' => $request->chartwork,
           'address' => $request->address,
           'sumary' => $request->sumary,
           'images' => $images,
           'avatar' => $avatar,
           'developer' => $request->developer,
           'professional_skill_des' => $request->professional_skill_des,
           'personal_skill_des' => $request->personal_skill_des,
           'education_des' => $request->education_des,
           'work_experience_des' => $request->work_experience_des,
           'user_id' => Auth::user()->id,
           ]);
        return redirect()->route('home.index');
    }

    public function show($id)
    {
        $cvs = Cv::findOrFail($id);
        return view('cv.show');
    }

    public function edit($id)
    {
        $cvs = Cv::findOrFail($id);
        return view('cv.edit', compact('cvs'));
    }

    public function update($id)
    {
        $cvs = Cv::findOrFail($id);
        return redirect()->route('home.create');
    }

    public function destroy($id)
    {
        Cv::findOrFail($id)->delete();
        return redirect()->back()->with('success', __('messages.delete'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $cv = Cv::where('name', 'like', "%$keyword%")
        ->orWhere('email', 'like', "%$keyword%")->paginate(Cv::PAGINATE);
        $data = [
            'cv' => $cv,
            'keyword' => $keyword
        ];
        return view('admin.home.search', $data);
    }
}
