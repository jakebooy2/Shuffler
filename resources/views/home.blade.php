@extends('layouts.master')

@section('content')
<!-- Begin Page Title-->
<title>Home &middot; Shuffler</title>
<!-- End Page Title-->
<!-- Begin Page -->
<div class="home">
	<!-- Begin Navigation -->
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="/">Shuffler</a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <!--<li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>-->
	      <li class="nav-item">
	      	<form class="form-inline my-2 my-lg-0">
	      		<input class="form-control mr-sm-2" type="text" placeholder="Search">
	      		<a class="nav-link" href="#" id="hover" onclick="submitSearch();">GO</a>
	    	</form>
	      </li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	<li class="nav-item"><center><a class="nav-link" id="hover" href="/login">LOGIN</a></center></li>
	    	<li class="nav-item"><a class="btn btn-primary" id="register" href="/register">REGISTER</a></li> 
	    </ul>
	  </div>
	</nav>
	<div class="cool-bar">&nbsp;</div>
	<div class="cool-bar-2">&nbsp;</div>
	<!-- End Navigation -->
	<!-- Begin Page-->
	
	<!-- End Page-->
</div>
@endsection 