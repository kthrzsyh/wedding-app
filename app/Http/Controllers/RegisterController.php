<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'username'  => 'required|min:3|max:255|unique:users',
            'password'  => 'required|min:5|max:255',
            'level_akses' => 'required'
        ]);
        // dd($request);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('sukses', 'Registration successfull! Please Login');

        return redirect('/login');
    }
}
