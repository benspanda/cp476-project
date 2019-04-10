@extends('layouts.app')

@section('title', 'Login - Teach It')

@section('content')
<div class="container">
    

    <div class="content">
        <br><center><h2>Login</h2></center>

        <div class="content-bottom">
            <div class="form">
                @if ($errors->has('email'))
                    <p class="status-message">{{ $errors->first('email') }}</p>
                @endif
                @if ($errors->has('password'))
                    <p class="status-message">{{ $errors->first('password') }}</p>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-row">
                        <label>Email</label>
                        <input id="email" placeholder="Email.." type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="input-row">
                        <label>Password</label>
                        <input id="password" placeholder="Password.." type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-info" value="Login">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
