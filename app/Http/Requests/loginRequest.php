<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class loginRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  public function messages() {
    return [
      'email.required' => 'Email is required.',
      'password.required' => 'Password is required.'
    ];
  }

  public function withValidator($validator) {
    $validator->after(function($validator) {
      if(empty($validator->errors()->all())) {
        $inputs = Input::all();
        unset($inputs['_token']);

        if(!Auth::attempt($inputs)) {
          $validator->errors()->add('credentials', 'Invalid Credentials.');
        }
      }
    });
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'email' => 'required',
      'password' => 'required'
    ];
  }
}
