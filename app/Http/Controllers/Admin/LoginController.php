<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Controllers\Hash;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Admin\LoginController;

class LoginController extends Controller
{
	public function login() 
	{
		if(!Auth::check())
		{
			return view('admin.account.login');
		}
		else
		{
			return redirect('admin/user');
		}
	}

	public function postLogin(Request $request) 
	{
		$data = [
		'email' => $request->email,
		'password' => $request->password,
		];
		if(Auth::attempt($data)){
			return redirect()->route('admin');
		}
		else {
			return redirect()->back()->with('error', __('messages.register_error'));
		}
	}

	public function logout() 
	{
		Auth::logout();
		return redirect()->route('login');
	}

	public function register() 
	{
		return view('admin.account.register');
	}

	public function postRegister(RegisterRequest $request) 
	{
		User::create([
			'name' => $request->name,
			'slug' => str_slug($request->slug),
			'phone' => $request->phone,
			'email' => $request->email,
			'email_verified_at' => $request->email_verified_at,
			'password' => bcrypt($request->password),
			'password_verified_at' => bcrypt($request->password),
			'date' => $request->date
			]);
		return redirect()->route('login')->with('success', __('messages.register'));
	}
}
