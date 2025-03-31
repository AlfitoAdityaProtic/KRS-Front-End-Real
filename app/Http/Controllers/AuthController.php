<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request){
        $response = Http::post('http://localhost:8080/api/registrasi', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        if ($response->successful()){
            return redirect()->route('/')->with('success', 'Registrasi Berhasil. Silahkan Login');
        }else{
            return back()->withErrors(['error' => 'Registrasi Gagal']);
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'npm' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'npm' => 'NPM atau password salah.',
        ]);
    }
}
