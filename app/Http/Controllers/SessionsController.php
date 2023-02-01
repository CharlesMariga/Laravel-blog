<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // attempt to authenticate the user and
        // login the user based on the provided credentials
        // redirect with a success flash message
        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }


        // auth failed
        // return back()->withErrors([
        //     'email' => 'Your provided credentials could not be verified.'
        // ]);
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->withInput()->with('success', 'Goodbye!');
    }
}
