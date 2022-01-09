<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(){
        
        $attributes=request()->validate([
            'name'=>'required|max:255|min:4',
            'email'=>'required|email|unique:users,email',
            // 'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:7',
            'phone'=>'required|max:10',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required'

        ]);

        // $attributes['password']=bcrypt($attributes['password']);

        $user=User::create($attributes);

        auth()->login($user);

        // session()->flash('success','Your account has been created.');

        return redirect('/')->with('success','Your account has been created.');
        
    }
}
