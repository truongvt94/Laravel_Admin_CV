@extends('Admin.Home')
@section('content')
<h1 class="text-center"> Edit User </h1><br>
<form class="frm-add" method="post" enctype="multipart/form-data" action="{{ route('user.update',$user->id) }}">
	@method('PUT')
	@csrf
	@if(Session::has('success'))
	<div class="alert alert-success">
		{{ Session::get('success') }}
	</div>
	@endif

	@include('error.error')
	
	<div class="form-group">
		<input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Enter name...">
	</div>     
	<div class="form-group">
		<input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Enter phone...">
	</div>
	<div class="form-group">
		<input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter email...">
	</div>
	<div class="form-group">
		<input type="email" class="form-control" name="email_verified_at" value="{{ $user->email_verified_at }}" placeholder="Enter email...">
	</div>
	<div class="form-group">
		<select name="type" class="form-control">
			<option>--Author--</option>
			<option @if($user->type == 'super') selected @endif value="super">Super</option>
			<option @if($user->type == 'admin') selected @endif value="admin">admin</option>
			<option @if($user->type == 'hr') selected @endif value="hr">hr</option>
			<option @if($user->type == 'member') selected @endif value="member">Member</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Edit User</button>
</div>
</form>

@endsection