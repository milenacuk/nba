<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Team;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $this->validate(
            request(),
             User::VALIDATION_RULES
            );

            $user = User::create(request()->all());
            auth()->login($user);

            return redirect('/teams');
    }
}
