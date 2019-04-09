<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Reference;
use App\Models\CV;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Hash;
use App\Http\Requests\UsersRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
{
    public function index(){
    	$show = Reference::paginate(Reference::PAGINATE);
    	return view('admin.reference.index', compact('show'));
    }

    public function create(){
        $cvv = CV::all('id', 'name');
        return view('admin.reference.store', compact('cvv'));
    }

    public function store(Request $request){
        $img = '';
        if($request->hasFile('avatar'))
        {
            $fileEx = '.'.$request->avatar->extension();
            $name = 'img'.uniqid().$fileEx;
            $request->file('avatar')->move(public_path('images'), $name);
            $img = $name;
        }
        Reference::create([
            'avatar' => $img,
            'content' => $request->content,
            'cv_id' => $request->cv_id
            ]);
        return redirect()->back()->with('success', __('messages.insert')); 	
    }

    public function edit($id){
        $refer = Reference::findOrFail($id);
        $cv = CV::all();
       /* dd($cv);*/
        return view('admin.reference.update', compact('refer', 'cv'));
    }

    public function update(Request $request, $id){
        $refer = Reference::findOrFail($id);
       
        $refer->content = $request->content;
        $old_images = $request->old_images;

        if ($request->hasFile('avatar')) {
            $fileExtension = '.'.$request->avatar->extension();             
            $imageName = 'img'.uniqid().$fileExtension; 
            $request->file('avatar')->move(public_path('images'), $imageName);
            $refer->avatar = $imageName;
            if (trim($old_images) != "" && file_exists(public_path('images/') . $old_images)) {
                unlink(public_path('images/') . $old_images);
            }
        } else {
            $refer->avatar = $old_images;
        }
        $refer->save();
        return redirect()->back()->with('success','Edit success user', compact('refer', 'cv'));
    }

    public function destroy($id){
        Reference::findOrFail($id)->delete();
        return redirect()->back()->with('success', __('messages.delete'));
    }
}
