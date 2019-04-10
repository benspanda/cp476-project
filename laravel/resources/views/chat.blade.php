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
          <div class="message">
            <p class="message-details"><span class="pop">Elmo</span> 5 minutes ago</p>
            <p class="message-content">How do I write code?</p>
          </div>
          <div class="message">
            <p class="message-details"><span class="pop">Barack Obama</span> Just now</p>
            <p class="message-content">1001101</p>
          </div>
        </div>
        <div class="compose">
          <textarea placeholder="Message.."></textarea>
          <a href="#send">Send</a>
        </div>
      </div>
    </div>
  </div>
@endsection