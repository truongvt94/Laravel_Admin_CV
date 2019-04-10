<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\UsersRequest;


class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'name' => 'required|min:5|max:100',
            'email' => 'required|unique:users,email,'.$this->id,
            'email_verified_at' => 'required|same:email',
            'phone' => 'required|numeric|min:8',
            'date' => 'required',
            'password' => 'required|min:10',
            'password_verified_at' => 'required|same:password',
        ];
    }
}
