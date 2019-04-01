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
use App;

class LoginController extends Controller
{
	public function login()
	{
		if(!Auth::check())
		{
			return view('admin.login.login');
		}
		else
		{
			return redirect('admin/user');
		}
	}

	public function postLogin(Request $request)
	{
		$data = [
		'email'=>$request->email,
		'password'=>$request->password,
		];
		if(Auth::attempt($data)){
			/*$remember = $request->remember_token;
			if(!empty($remember)){
				Auth::login(Auth::user()->id, true);
			}*/
			return redirect('admin');
		}
		else {
			return redirect()->back()->with('eror', __('messages.register_error'));
		}
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function logout()
	{
		Auth::logout();
		return redirect()->route('login');
	}

	public function register()
	{
		return view('admin.login.register');
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
