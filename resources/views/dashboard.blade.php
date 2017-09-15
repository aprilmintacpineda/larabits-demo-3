@extends('layouts.master')

@section('body')
  @if(empty($messages))
    <div class="message-box">
      <h1>Nothing!</h1>
      <p>No messages yet.</p>
    </div>
  @else
    @foreach($messages as $message)
      <div class="message">
        <p>{{ $message->message }}</p>
      </div>
    @endforeach
  @endif
@endsection