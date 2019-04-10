<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection\paginate;
use App\Http\Controllers\Controller;
use App\User;
use SoftDeletes;
use App\Http\Controllers\Hash;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class UserController extends Controller
{
    public function index() 
    {
    	$users = User::paginate(User::PAGINATE);
    	return view('admin.user.index', compact('users'));
    }

    public function create() 
    {
        $roles = User::all('type');
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request) { 
        if($request->type != User::SUPER_ADMIN) {
            $img = '';
            if ($request->hasFile('avatar')) {
                $fileExtension = '.'.$request->avatar->extension(); 
                $imageName = 'img'.uniqid().$fileExtension;
                $request->file('avatar')->storeAs('', $imageName, 'avatar_upload');
                $img = $imageName;
            }
            User::create([
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'phone' => $request->phone,
                'date' => $request->date,
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at,
                'password' => bcrypt($request->password),
                'password_verified_at' => bcrypt($request->password_verified_at),
                'type' => $request->type,
                'avatar' => $img
                ]);
            return redirect()->back()->with('success', __('messages.insert'));
        }
        return redirect()->back()->with('error', __('messages.super_error'));
    }

    public function edit($id) 
    {
        $user = User::findOrFail($id); 
        if((Auth::user()->id != User::SUPER_ADMIN) && ($id == User::SUPER_ADMIN || ($user["type"] == User::ADMIN && (Auth::user()->id != $id)) || ($user["type"] == User::ADMIN && (Auth::user()->id != $id)))) {
            return redirect()->back()->with('error', __('messages.authorization'));
        }
        return view('admin.user.edit', compact('user'));
    }

    public function update(EditUserRequest $request, $id) 
    {
        if($request->type != User::SUPER_ADMIN) {
            User::findOrFail($id)
            ->update($request->all());
            return redirect()->back()->with('success', __('messages.edit')); 
        }
        return redirect()->back()->with('error', __('messages.super_error'));
    }

    public function destroy($id) 
    {
        $user = User::findOrFail($id);
        if((Auth::user()->id != User::SUPER_ADMIN) && ($id == User::SUPER_ADMIN) || ($user["type"] == User::SUPER_ADMIN)) {
            return redirect()->back()->with('error', __('messages.authorization'));
        }
        $user->delete();
        return redirect()->back()->with('success', __('messages.delete'));
    }

    public function search(Request $request) 
    {
        $keyword = $request->input('keyword');
        $user = User::where('name', 'like', "%$keyword%")
        ->orWhere('email', 'like', "%$keyword%")->paginate(User::PAGINATE);
        $data = [
        'user' => $user,
        'keyword' => $keyword
        ];
        return view('admin.user.search', $data);
    }
}
