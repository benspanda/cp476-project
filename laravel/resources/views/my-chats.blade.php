@extends('layouts.app')

@section('content')
  <br><center><h2>My Courses</h2></center>
  <div class="container">
      <div class="my-courses">
        @foreach($user->courses as $course)
          <a href="/course/{{ $course->id }}">
            <p class="my-course-title">Name: {{ $course->name }}</p>
            <p class="my-course-detail">Code: {{ $course->code }}</p>
            <p class="my-course-detail">Role: {{ $course->user_id == Auth::id() ? 'Teacher' : 'Student' }}</p>
          </a>
        @endforeach
      </div>
  </div>
@endsection