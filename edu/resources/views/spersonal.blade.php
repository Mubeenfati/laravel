@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>Student Details</title>
  <meta charset="utf-8">
  <link href="https://f@extends('layouts.app')onts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/mystyle.css')}}" type="text/css">
</head>
<body>
    <img src="images/img2.jpg" height="180%" width="100%">
	<div class="contact-form">
		<img alt="" class="avatar" src="images/img3.jpg">
		<h2>Personal Information</h2>
        <div class="container">
		<form action="{{route('save')}}" method="post">
            @csrf
			<p>First name</p>
            <input placeholder="First name" type="text" class="form-control" name="firstname">
			<p>Last name</p><input placeholder="Last Name" type="text" class="form-control" name="lastname">
			<p>Phone</p><input placeholder="phone" type="number" class="form-control" name="phone">
            <p>address</p><input placeholder="address" type="text" class="form-control" name="address">
			<p>Email</p><input placeholder="Email" type="email" class="form-control" name="email">
			<input type="submit" value="submit" class="btn btn-danger">
		</form>
	</div>
    </div>
</body>
</html>
@endsection
