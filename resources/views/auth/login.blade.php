@extends('layouts.master')

<!-- TITLE -->
<title>Login &middot; Shuffler</title>
<!-- END TITLE -->

@section('content')
<div class="login-page">
    <center>
        <div class="login">
            <div class="title">Login</div>
            <div class="subtitle">New? <a href="/register">Register now</a></div>
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                @if ($errors->has('email'))
                    <script> alert(" {{ $errors->first('email') }}"); </script>
                @endif
                <label for="email" id="email-label">E-Mail Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                <label for="password" id="pass-label">Password</label>
                <input type="password" id="password" name="password" required>
                <label id="remember">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label><br>
                <button type="submit" class="btn btn-primary">Login</button><br>
            </form>
        </div>
        <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
    </center>
</div>
@endsection
