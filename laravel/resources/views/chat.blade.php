@extends('layouts.app')

@section('content')
  <div class="course-header">
    <h2>{{ $course->code }}: {{ $course->name }}</h2>
    <p>Unique course access code: {{ $course->access_code }}</p>
  </div>
  <div class="container chat-container">
    <div class="sidebar-menu">
      <p class="sidebar-label">Members</p>
      @foreach($course->users as $u)
        <p class="sidebar-member">{{ $u->name }} {!! $u->id == $course->user_id ? '<span>(Admin)</span>' : '' !!}</p>
      @endforeach
    </div>
    <div class="content">
      <div class="content-bottom">
        <div class="messages">
          @if(!count($course->messages))
            <p>No messages.</p>
          @endif
          @foreach($course->messages as $message)
            <div class="message">
              <p class="message-details"><span class="pop">{{ $message->user->name }}</span> {{ $message->created_at->diffForHumans() }}</p>
              <p class="message-content">{{ $message->content }}</p>
            </div>
          @endforeach
        </div>
        <div class="compose">
          <textarea placeholder="Message.."></textarea>
          <input type="submit" value="Send" course-id="{{ $course->id }}">
        </div>
      </div>
    </div>
  </div>
@endsection