<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\References;
use App\Http\Controllers\Controller;

class ReferController extends Controller
{
    public function index(){
    	$show = References::paginate(References::PAGINATE);
    	return view('admin.refer.index', compact('show'));
    }

    public function create(){
    	return view('admin.refer.store');
    }

    public function store(Request $request){
		References::create([
			'content' => $request->content
			]);
		return redirect()->back()->with('success', __('messages.insert')); 	
    }

    public function edit($id){
    	return view('admin.refer.update');
    }

    public function update($id){

    }
}
