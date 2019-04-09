<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\University;
use App\Http\Controllers\Controller;

class UniversityController extends Controller
{
    public function index(){
    	$show = University::paginate(5);
    	return view('admin.university.index', compact('show'));
    }

    public function create(){
    	return view('admin.university.store');
    }

    public function store(Request $request){
    	University::create([
    		'name' => $request->name,
    		'slug' => str_slug($request->name),
    		'is_feature' => $request->is_feature
    		]);
    	return redirect()->back()->with('success', __('messages.insert'));
    }

    public function destroy($id){
    	University::findOrFail($id)->delete();
    	return redirect()->back()->with('success', __('messages.delete'));
    }
}
