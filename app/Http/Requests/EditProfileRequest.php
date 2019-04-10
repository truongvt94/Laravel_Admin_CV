<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'name' => 'required|',
            'phone' => 'required|max:15|min:8',
            'email' => 'required|unique:users,email,' .$this->profile,
            'email_verified_at' => 'required|same:email',
            'date' => 'required|date'
        ];
    }
}
