<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\registerRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\User;

class registerController extends Controller
{
  function register(registerRequest $request) {
    $inputs = Input::all();
    unset($inputs['_token'], $inputs['cpassword']);

    $inputs['password'] = Hash::make($inputs['password']);

    $user = User::create($inputs);

    return redirect('login');
  }
}
