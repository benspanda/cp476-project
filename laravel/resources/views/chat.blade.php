@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="sidebar-menu">
        <p class="sidebar-label">Public Discussions</p>
        <a href="">Unit #1</a>
        <a href="">Unit #2</a>
        <a href="">Unit #3</a>
        <a href="">Assignment #1</a><br>
        <p class="sidebar-label">Private Messages</p>
        <a href="">Barack Obama</a>
        <a href="">Elmo</a>
      </div>
    <div class="content">
      <div class="content-top">
        <h2>Unit #2</h2>
      </div>
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