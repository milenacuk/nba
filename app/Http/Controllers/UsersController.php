<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function create(){
        return view ('register.create');
    }
    public function store(){
        $this->validate(
            request(),
             User::VALIDATION_RULES
            );

            //$user = User::create(request()->all());

            $user = new User();
            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));
            $user->save();

            auth()->login($user);

            return redirect('/teams');
    }
}
