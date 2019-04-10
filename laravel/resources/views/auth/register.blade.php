@extends('layouts.app')

@section('title', 'Register - Teach It')

@section('content')
<div class="container">
    <div class="content">
        <br><center><h2>Register</h2></center>

      <div class="content-bottom">
            <div class="form">
                @if ($errors->has('name'))
                    <p class="status-message">{{ $errors->first('name') }}</p>
                @endif
                @if ($errors->has('email'))
                    <p class="status-message">{{ $errors->first('email') }}</p>
                @endif
                @if ($errors->has('password'))
                    <p class="status-message">{{ $errors->first('password') }}</p>
                @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-row">
                            <label>Name</label>
                            <input id="name" placeholder="Name.." type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        </div>

                        <div class="input-row">
                            <label>Email</label>
                            <input id="email" placeholder="Email.." type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="input-row">
                            <label>Password</label>
                            <input id="password" placeholder="Password.." type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>
                        
                        <div class="input-row">
                            <label>Repeat Password</label>
                            <input id="password-confirm" placeholder="Repeat Password.." type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <input type="submit" class="btn btn-info" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
