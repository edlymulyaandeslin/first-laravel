<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {

        return view('register');
    }

    public function welcome(Request $request)
    {

        return view('welcome', [
            'namaDpn' => $request->input('namaDepan'),
            'namaBel' => $request->input('namaBelakang'),
        ]);
    }
}
