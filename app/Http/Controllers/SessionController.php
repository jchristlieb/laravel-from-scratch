<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
           'email' => 'required|email',
           'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');


       if (Auth::attempt($credentials)) {
           return redirect()->route('home');
       }

        // if attempt fails return back
        return redirect()->route('session.login');

    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
