<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EditProfileRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
	public function edit($id) 
	{
		$user = User::findOrFail($id);
		if($user->id == Auth::user()->id) {
			return view('admin.profile.index', compact('user'));
		}
		return redirect()->back();
	}

	public function update(EditProfileRequest $request, $id) 
	{
		$user = User::findOrFail($id)->update($request->all());
		return redirect()->back()->with('success', __('messages.edit'));
	}
}
