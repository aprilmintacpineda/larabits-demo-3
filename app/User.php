<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Message;

class User extends Authenticatable
{
  protected $fillable = ['firstname', 'middlename', 'surname', 'email', 'password'];
  protected $remember_token = false;

  public function messages() {
    return $this->hasMany(Message::class);
  }
}
