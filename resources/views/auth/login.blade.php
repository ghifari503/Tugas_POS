@extends('layouts.auth')

@section('login')


<div class="box">

    <form method="POST" action="{{ route('login') }}">
        @csrf
    <form autocomplete="off">
        <h2>Sign in</h2>
        <div class="inputBox">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
              </span>
              @enderror
            <span>Userame</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span>Password</span>
            <i></i>
        </div>

        <input type="submit" value="Login">
    </form>
</div>

@endsection
