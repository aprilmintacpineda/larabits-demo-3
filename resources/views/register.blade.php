@extends('layouts.master')

@section('body')
  <form class="input-form" method="post">
    <ul>
      <li>
        <h1>Create Account</h1>
      </li>
      <li>
        <p>Your Firstname</p>
        <input class="input-default" type="text" name="firstname">
        {!! isset($errors) && !empty($errors->get('firstname'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('firstname')) . '</p>' : '' !!}
      </li>
      <li>
        <p>Your Middlename</p>
        <input class="input-default" type="text" name="middlename">
        {!! isset($errors) && !empty($errors->get('middlename'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('middlename')) . '</p>' : '' !!}
      </li>
      <li>
        <p>Your Surname</p>
        <input class="input-default" type="text" name="surname">
        {!! isset($errors) && !empty($errors->get('surname'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('surname')) . '</p>' : '' !!}
      </li>
    </ul>
    <hr>
    <ul>
      <li>
        <p>Your Email</p>
        <input class="input-default" type="email" name="email">
        {!! isset($errors) && !empty($errors->get('email'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('email')) . '</p>' : '' !!}
      </li>
      <li>
        <p>Desired Password</p>
        <input class="input-default" type="Password" name="password">
        {!! isset($errors) && !empty($errors->get('password'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('password')) . '</p>' : '' !!}
      </li>
      <li>
        <p>Retype Password</p>
        <input class="input-default" type="Password" name="cpassword">
        {!! isset($errors) && !empty($errors->get('cpassword'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('cpassword')) . '</p>' : '' !!}
      </li>
      <li>
        {{ csrf_field() }}
        <input class="submit-btn-default" type="submit" value="Create Account">
      </li>
    </ul>
  </form>
@endsection