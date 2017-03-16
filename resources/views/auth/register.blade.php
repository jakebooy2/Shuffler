@extends('layouts.master')

<!-- TITLE -->
<title>Register &middot; Shuffler</title>
<!-- END TITLE -->

@section('content')
<div class="register-page">
    <center>
        <div class="register">
            <div class="title">Register</div>
            <div class="subtitle">Already registered? <a href="/login">Login</a></div>
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                @if ($errors->has('name'))
                    <script> alert(" {{ $errors->first('name') }}"); </script>
                @endif                
                @if ($errors->has('email'))
                    <script> alert(" {{ $errors->first('email') }}"); </script>
                @endif  
                @if ($errors->has('password'))
                    <script> alert(" {{ $errors->first('password') }}"); </script>
                @endif

                <label for="name" id="name-label">Username</label>
                <input type="text" id="username" name="name" value="{{ old('name') }}" required autofocus>

                <label for="email" id="email-label">E-Mail Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

                <label for="password" id="pass-label">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="password_confirmation" id="pass-label">Confirm Password</form>
                <input id="password" type="password" name="password_confirmation" required><br>

                <button type="submit" id="register-btn" class="btn btn-primary">Register</button>

            </form>
        </div> 
    </center>
</div>
@endsection
