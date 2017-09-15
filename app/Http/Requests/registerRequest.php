<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  public function messages() {
    return [
      'firstname.required' => 'Firstname is required',
      'firstname.min' => 'Firstname must be at least 3 characters long.',
      'middlename.required' => 'Middlename is required',
      'middlename.min' => 'Middlename must be at least 3 characters long.',
      'surname.required' => 'Surname is required',
      'surname.min' => 'Surname must be at least 3 characters long.',
      'email.required' => 'Email is required.',
      'email.email' => 'Email is invalid.',
      'cpassword.required' => 'You must retype your password.',
      'password.required' => 'Password is required.',
      'password.same' => 'Passwords do not match.'
    ];
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'firstname' => 'required|min:3',
      'middlename' => 'required|min:3',
      'surname' => 'required|min:3',
      'email' => 'required|email',
      'cpassword' => 'required|',
      'password' => 'required|same:cpassword'
    ];
  }
}
