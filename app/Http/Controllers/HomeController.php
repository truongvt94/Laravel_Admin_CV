<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\User;
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
        $show = CV::where('user_id', Auth::user()->id)->get();
        return view('admin.home.main', compact('show'));
    }

    public function create(){
        return view('cv.index');
    }

    public function store(){
        return redirect()->route('home.index');
    }

    public function edit($id){
        return view('cv.create');
    }

    public function destroy($id){
        Cv::findOrFail($id)->delete();
        return redirect()->back()->with('success', __('messages.delete'));
    }

    public function search(Request $request){
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
