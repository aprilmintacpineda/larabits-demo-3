<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class dashboardController extends Controller
{
  public function see() {
    if(Auth::check()) {
      $messages = Auth::user()->messages()->get();

      return view('dashboard', [
        'messages' => $messages->all()
      ]);
    }

    return redirect('login');
  }
}
