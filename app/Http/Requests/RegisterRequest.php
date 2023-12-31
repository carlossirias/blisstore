<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'max:30', 'min:8'],
            'repeated_password' => ['required', 'max:30' , 'min:8', 'same:password'],
            'country_id' => ['required', 'exists:languages,id', 'numeric']
        ];
    }
}
