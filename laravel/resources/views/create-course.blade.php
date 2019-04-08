@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="content">
        <br><center><h2>Create New Course</h2></center>
      <div class="content-bottom">
        <form class="form" method="POST" action="{{ route('actionCreateCourse') }}">
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <div class="input-row">
            <label>Course Code</label>
            <input type="text" placeholder="Ex. CP476..">
          </div>
          <div class="input-row">
            <label>Course Name</label>
            <input type="text" placeholder="Ex. Internet Computing..">
          </div>
          <input type="submit" class="btn btn-info" value="Create">
        </form>
      </div>
    </div>
  </div>
@endsection