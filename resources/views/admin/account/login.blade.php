@extends('Admin.master_login')
@section('content')
<div class="login-form">
	<form action="{!! route('postLogin') !!}" method="post">
	@csrf
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
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
		<div class="form-group row">
			<div class="col-md-6 offset-md-4">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

					<label class="form-check-label" for="remember">
						{{ __('Remember Me') }}
					</label>
				</div>
			</div>
		</div>
		<div class="form-group row mb-0">

		</div>
	</form>
	<br>
	<p class="text-center"><a href="{!! route('register') !!}">Create an Account</a></p>
</div>
@endsection