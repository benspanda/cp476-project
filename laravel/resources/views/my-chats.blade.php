@extends('layouts.app')

@section('content')
  <br><center><h2>My Courses</h2></center>
  <div class="container">
      <div class="my-courses">
        @if(!count($user->courses))
          <p class="no-courses-message">
            Welcome to Teach-It, {{ $user->name }}!
            <br><br>
            You don't have access to any course chats yet. Get started by joining a course with a unique course access code or creating a new course.
          </p>
        @endif
        @foreach($user->courses as $course)
          <a href="/course/{{ $course->id }}">
            <p class="my-course-title">Name: {{ $course->name }}</p>
            <p class="my-course-detail">Code: {{ $course->code }}</p>
            <p class="my-course-detail">Role: {{ $course->user_id == Auth::id() ? 'Teacher' : 'Student' }}</p>
          </a>
        @endforeach
        <div class="add-course-actions">
          <a class="btn btn-info" href="{{ route('joinCourse') }}">Join Course</a>
          <a class="btn btn-info" href="{{ route('createCourse') }}">Create Course</a>
        </div>
      </div>
  </div>
@endsection