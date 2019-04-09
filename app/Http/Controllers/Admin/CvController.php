<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Models\Cv;
use SoftDeletes;
use App\Http\Controllers\Controller;

class CvController extends Controller
{
    public function index(){
        $show = Cv::paginate(User::PAGINATE);
    	return view('admin.cv.index', compact('show'));
    }

    public function create(){
    	$user = User::all('id', 'name');
    	return view('admin.cv.store', compact('user'));
    }

    public function store(Request $request){
      $images = '';
      $avatar = '';
      if($request->hasFile('images')){
         $fileEx = '.'.$request->images->extension();
         $imgName = 'img'.uniqid().$fileEx;
         $request->file('images')->move(public_path('images'), $imgName);
         $images = $imgName;
     }
     if($request->hasFile('avatar')){
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
         'user_id' => $request->user_id,
         ]);
     return redirect()->back()->with('success', __('messages.insert'));
 }

 public function destroy($id){
  CV::findOrFail($id)->delete();
  return redirect()->back()->with('success', __('messages.delete'));
}
}
