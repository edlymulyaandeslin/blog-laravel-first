<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // validasi
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        // enkripsi password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // insert ke database
        User::create($validatedData);

        // pindah ke halaman login & message

        // $request->session()->flash('success', 'Registrasi berhasil! silakan login');

        return redirect('/login')->with('success', 'Registrasi berhasil! silakan login');
    }
}
