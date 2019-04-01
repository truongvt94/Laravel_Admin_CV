@extends('Admin.master_login')
@section('content')
<div class="login-form">
	<form action="{{ route('postRegister') }}" method="post">
		<h2 class="text-center">Infor Register</h2>

		@include('eror.eror')

		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter name" name="name" required="required">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter Phone" name="phone" required="required">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Enter email" name="email" required="required">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Enter email confirm..." name="email_verified_at" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Enter password" name="password" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Enter password confirm..." name="password_verified_at" required="required">
		</div>
		<input type="text" id="datepicker" name="date" placeholder="Year/ Month/ Day"><br><br>
		@csrf
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Register</button>
		</div>          
	</form>
	<br><br>
</div>
@endsection
