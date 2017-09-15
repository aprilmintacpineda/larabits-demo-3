<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\loginRequest;

class loginController extends Controller
{
  public function login(loginRequest $request) {
    return redirect('dashboard');
  }
}
