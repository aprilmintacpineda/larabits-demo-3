@extends('layouts.master')

@section('body')
  @if(session()->get('sent'))
    <div class="message-box">
      <h1>Message Sent!</h1>
      <p>Your message: {{session()->get('message')}}</p>
    </div>
  @else
    <form class="input-form" method="post">
      <ul>
        <li>
          <h1>{{ $fullname }}</h1>
        </li>
        <li>
          <p>Your message</p>
          <textarea class="input-default textarea-default" name="message"></textarea>
          {!! isset($errors) && !empty($errors->get('message'))? '<p class="red-text">' . implode('</p><p class="red-text">', $errors->get('message')) . '</p>' : '' !!}
        </li>
        <li>
          {{ csrf_field() }}
          <input class="submit-btn-default" type="submit" value="Create Account">
        </li>
      </ul>
    </form>
  @endif
@endsection