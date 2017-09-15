@extends('layouts.master')

@section('body')
  <form class="input-form" method="post">
    <ul>
      <li>
        <h1>Login</h1>
      </li>
      <li>
        <p>Your Email</p>
        <input class="input-default" type="text" name="email">
        {!! isset($errors) && !empty($errors->get('email'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('email')) . '</p>' : '' !!}
      </li>
      <li>
        <p>Your Password</p>
        <input class="input-default" type="password" name="password">
        {!! isset($errors) && !empty($errors->get('password'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('password')) . '</p>' : '' !!}
      </li>
      <li>
        {{ csrf_field() }}
        <input class="submit-btn-default" type="submit" value="Login">
        {!! isset($errors) && !empty($errors->get('credentials'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('credentials')) . '</p>' : '' !!}
      </li>
    </ul>
  </form>
@endsection