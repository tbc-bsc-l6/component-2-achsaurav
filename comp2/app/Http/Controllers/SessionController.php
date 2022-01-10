<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(){
        //validate the request
        $attributes=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        //based on provided credintials
        if(! auth()->attempt($attributes)){
            throw ValidationException::withMessages(['email'=>"Your provided credintials are incorrect."]);
            // return back()
            //     ->withInput()
            //     ->withErrors(['email'=>"Your provided credintials are incorrect."]);
        }


        session()->regenerate();//session fixation handlaning
        //redirect with success flash message
        return redirect('/')->with('success','Welcome Back!');
        // auth failed

    }


    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success','Goodbye!');
    }
}
