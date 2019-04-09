
@extends('Admin.Home')
@section('content')
<form action="{!! route('search') !!}" method="get" class="navbar-form form-search">
	@csrf            
	<div class="input-group no-border">
		<input type="text" name="keyword" class="form-control" placeholder="Search...">
		<button type="submit" class="btn btn-white btn-round btn-just-icon">
			<i class="material-icons">search</i>
			<div class="ripple-container"></div>
		</button>
	</div>
</form><br>
<h1 class="daylah1 text-center">Infor User</h1>
@if(Session::has('success'))
<div class="alert alert-success">
	{{ Session::get('success') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
	{{ Session::get('error') }}
</div>
@endif

@include('error.error')

<form action="{!! route('profile.update', Auth::user()->id) !!}" method="post">
	@csrf
	@method('PUT')
	<table style="width: 50%; margin: 0 auto" class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Full name *</th>
				<th><input class="inputProfile" type="text" name="name" value="{{ $user->name }}"></th>
			</tr>
			<tr>
				<th scope="col">Phone *</th>
				<th><input class="inputProfile" type="text" name="phone" value="{{ $user->phone }}"></th>
			</tr>
			<tr>
				<th scope="col">Email *</th>
				<th><input class="inputProfile" type="text" name="email" value="{{ $user->email }}"></th>
			</tr>
			<tr>
				<th scope="col">Confirm Email *</th>
				<th><input class="inputProfile" type="text" name="email_verified_at" value="{{ $user->email_verified_at }}"></th>
			</tr>
			<tr>
				<th scope="col">Date *</th>
				<th><input class="inputProfile" id="datepicker" name="date" placeholder="yyyy-mm-dd" value="{{ $user->date }}" />
				</th>
			</tr>
			<tr>
				<th scope="col" colspan="2" class="text-center"><button class="btn btn-sumary btn-profile" type="submit">Update</button></th>
			</tr>
		</thead>
	</table>
</form>
<script>
	$('#datepicker').datepicker({
		uiLibrary: 'bootstrap4'
	});
</script>
@endsection

