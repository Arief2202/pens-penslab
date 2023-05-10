<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'nrp' => [
                    'required', 'string', 'max:255',
                   ignore(Auth::user()->nrp)
                ],
                'nama' => [
                    'required', 'string', 'max:255',
                    ignore(Auth::user()->nama)
                ],
                'email' => [
                    'required', 'email', 'max:255',
                    ignore(Auth::user()->email)
                ],
                'password' => [
                    'required', 'password', 'max:255',
                    ignore(Auth::user()->password)
                ],
                'role' => [
                    'required', 'string', 'max:255',
                    ignore(Auth::user()->role)
                ],
                'profile' => [
                    'required', 'string', 'max:255',
                    ignore(Auth::user()->profile)
                ]
            ];
    }
}
