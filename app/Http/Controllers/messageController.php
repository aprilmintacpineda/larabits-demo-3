<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\messageRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Message;

class messageController extends Controller
{
  public function send($id, messageRequest $request) {
    $user = User::find($id);

    if(!$user) {
      return abort(404);
    }

    $inputs = Input::all();
    unset($inputs['_token']);
    $user->messages()->create($inputs);

    return redirect('/' . $id)->with([
      'sent' => true,
      'fullname' => ucwords(strtolower($user->firstname . ' ' . $user->middlename . ' ' . $user->surname)),
      'message' => $inputs['message']
    ]);
  }

  public function compose($id) {
    $user = User::find($id);

    if(!$user) {
      return abort(404);
    } else if(Auth::check()) {
      return redirect('dashboard');
    }

    return view('message', [
      'fullname' => ucwords(strtolower($user->firstname . ' ' . $user->middlename . ' ' . $user->surname))
    ]);
  }
}
