<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Auth\RegisterRequest;
class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {

        
        User::create([
            'nik' => request('nik'),
            'name' => request('name'),
            'password' => bcrypt(request('password')),
            'tempatlahir' => request('tempatlahir'),
            'tgllahir' => request('tgllahir'),
            'alamat' => request('alamat'),
            'agama' => request('agama'),
            'status' => request('status'),
            'pekerjaan' => request('pekerjaan'),
            'warganegara' => request('warganegara'),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Termakasih, Anda telah terdaftar'
        ], Response::HTTP_OK);
    }
}
