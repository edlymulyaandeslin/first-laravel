<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {

        return view('register', [
            'title' => 'register'
        ]);
    }

    public function welcome(Request $request)
    {
        $namaDpn = $request->input('namaDepan');
        $namaBel = $request->input('namaBelakang');

        return view('welcome', [
            'title' => 'Welcome',
            'namaDpn' => $namaDpn,
            'namaBel' => $namaBel
        ]);
    }
}
