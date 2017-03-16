@extends('layouts.master')

@section('content')
<div class="account">
	@include('layouts.navigation')
	<br>
	<center><h1 style="color: #fff;">Hey, {{ Auth::user()->name }}!</center>
</div>
@endsection