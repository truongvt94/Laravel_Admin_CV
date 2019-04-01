<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection\paginate;
use App\Http\Controllers\Controller;
use App\User;
use SoftDeletes;
use App\Http\Controllers\Hash;
use App\Http\Requests\UsersRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class UserController extends Controller
{
    public function user()
    {
    	$show = User::paginate(User::PAGINATE);
    	return view('admin.user.list', compact('show'));
    }

    public function create()
    {
    	return view('admin.user.add');
    }

    public function postCreat(UsersRequest $request)
    {
        
        $userimg = '';
        if ($request->hasFile('avatar')) 
        {
            $fileExtension = '.'.$request->avatar->extension(); 
            $imageName = 'img'.uniqid().$fileExtension;
            $request->file('avatar')->storeAs('', $imageName, 'avatar_upload');
            $userimg = $imageName;
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
            'avatar' => $userimg
            ]);
        return redirect()->back()->with('success', __('messages.insert'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function postUpdate(UsersRequest $request, $id)
    {

        User::findOrFail($request->id)
            ->update($request->all());
            return redirect()->back()->with('success', __('messages.edit'));
        }

        public function delete($id)
        {
            $user = User::findOrFail($id)->delete();
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
