<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'user_name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:rfc|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        // $request->session()->flash('success', 'registration success, please login!');

        return redirect('/login')->with('success', 'registration success, please login!');
    }
}