@extends('Admin.master_login')
@section('content')
<div class="login-form">
	<form action="{!! route('postLogin') !!}" method="post">
		<h2 class="text-center">Log in</h2>

		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif

		<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Email" required="required">
		</div>

		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="Password" required="required">
		</div>
		
		@if(Session::has('error'))
		<div class="alert alert-danger">
			{{ Session::get('error') }}
		</div>
		@endif

		<div class="form-group">
			@csrf
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
		
		<div class="clearfix">
			<label class="pull-left checkbox-inline">
				<input type="checkbox" name="remember"> Remember me
			</label>
		</div>        
	</form>
	<br>
	<p class="text-center"><a href="{!! route('register') !!}">Create an Account</a></p>
</div>
@endsection