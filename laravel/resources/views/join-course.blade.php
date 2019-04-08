@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="content">
              <br><center><h2>Join Course</h2></center>

      <div class="content-bottom">
        <div class="form">
          <div class="input-row">
            <label>Unique Course Access Code</label>
            <input type="text" placeholder="Ask your teacher for the code.">
          </div>
          <button type="button" class="btn btn-info"><a class = "text-white" href="#">Join</a></button>
        </div>
      </div>
    </div>
  </div>
@endsection