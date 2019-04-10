@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="content">
              <br><center><h2>Join Course</h2></center>

      <div class="content-bottom">
        <form class="form" method="POST" action="{{ route('actionJoinCourse') }}">
          @if($errors->any())
            @foreach ($errors->all() as $error)
              <p class="status-message">{{$error}}</p>
            @endforeach
          @endif
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <div class="input-row">
            <label>Unique Course Access Code</label>
            <input type="text" name="access_code" placeholder="Ask your teacher for the code.">
          </div>
          <input type="submit" class="btn btn-info" value="Join">
        </form>
      </div>
    </div>
  </div>
@endsection