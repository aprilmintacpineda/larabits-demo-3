<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
  public function logout() {
    if(Auth::check()) {
      Auth::logout();
    }

    return redirect('login');
  }
}
