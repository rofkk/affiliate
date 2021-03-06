<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterPost
 * @package App\Http\Requests
 *
 * @property $userName string
 * @property $password string
 * @property $passwordTwice string
 */
class RegisterPost extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'userName' => 'required|min:1|max:20|regex:/^([a-zA-Z0-9]){4,20}$/',
            'password' => 'required|min:4|max:20|regex:/^([a-zA-Z0-9\.\-_\/\+=\.\~\!@#\$\%\^\&\*\(\)\[\]\{\}]){4,20}/',
            'passwordTwice' => 'required|same:password',
        ];
    }
}
