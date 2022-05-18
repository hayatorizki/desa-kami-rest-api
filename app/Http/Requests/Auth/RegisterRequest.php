<?php

namespace App\Http\Requests\Auth;

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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nik' => ['alpha_num', 'required', 'min:16', 'unique:users,nik'],
            'name' => ['required'],
            'password' => ['required', 'min:6'],
            'tempatlahir' => ['required', 'string'],
            'tgllahir' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'agama' => ['required', 'string'],
            'status' => ['required', 'string'],
            'pekerjaan' => ['required', 'string'],
            'warganegara' => ['required', 'string'],
        ];
    }
}
