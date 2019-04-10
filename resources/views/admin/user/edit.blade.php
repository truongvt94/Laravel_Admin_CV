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

	@if(Session::has('error'))
		<div class="alert alert-danger">
			{{ Session::get('error') }}
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
	@if(Auth::user()->id != $user->id)
	<div class="form-group">
		<select name="type" class="form-control">
			<option>--Author--</option>
			<option @if($user->type == 2) checked  @endif @if($user->type == '2') selected @endif value="2">Admin</option>
			<option @if($user->type == 3) checked  @endif @if($user->type == '3') selected @endif value="3">Hr Hapo</option>
			<option @if($user->type == 4) checked  @endif @if($user->type == '4') selected @endif value="4">Member</option>
		</select>
	</div>
	@endif
	<button type="submit" class="btn btn-primary">Edit User</button>
</div>
</form>

@endsection