<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(){
        
        $attributes=request()->validate([
            'name'=>'required|max:255|min:4',
            'email'=>'required|email',
            'password'=>'required|min:7',
            'phone'=>'required|max:10',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required'

        ]);

        // $attributes['password']=bcrypt($attributes['password']);

        User::create($attributes);

        return redirect('/');
        
    }
}
