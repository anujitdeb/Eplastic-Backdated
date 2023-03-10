<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'name' => 'required|min:3|string',
            'email' => 'email|required|unique:users',
            'phone' => 'required|numeric|unique:users',
            'type' => 'required|string',
            'password' => 'required|min:6',
            'confirm_password' => 'same:password',
            'address' => 'required|string',
        ];
    }
}
