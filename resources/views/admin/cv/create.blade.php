@extends('Admin.Home')
@section('content')
<h1 class="text-center">Add CV</h1><br>
<form class="frm-add" method="post" enctype="multipart/form-data" action="{{ route('cv.store') }}">

	@if(Session::has('success'))
	<div class="alert alert-success">
		{{ Session::get('success') }}
	</div>
	@endif

	@include('error.error')

	<div class="form-group">
		<input type="text" class="form-control" name="name" required="required" placeholder="Enter name...">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="phone" required="required" placeholder="Enter phone...">
	</div>
	<div class="form-group">
		<input type="email" class="form-control" name="email" required="required" placeholder="Enter email...">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="date" required="required" placeholder="Enter YY/MM/DD...">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="facebook" required="required" placeholder="Enter facebook...">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="skype" required="required" placeholder="Enter skype...">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="chartwork" required="required" placeholder="Enter chartwork...">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="address" required="required" placeholder="Enter address...">
	</div>
	<div class="form-group">
		<textarea class="form-control" rows="5" name="sumary" required="required" placeholder="Enter sumary..."></textarea>
	</div>
	<div class="form-group">
		<input type="area" class="form-control" name="developer" required="required" placeholder="Enter developer...">
	</div>
	<div class="form-group">
		<textarea class="form-control" rows="5" name="professional_skill_des" required="required" placeholder="Enter professional_skill_des..."></textarea>
	</div>
	<div class="form-group">
		<textarea class="form-control" rows="5" name="personal_skill_des" required="required" placeholder="Enter personal_skill_des..."></textarea>
	</div>
	<div class="form-group">
		<textarea class="form-control" rows="5" name="work_experience_des" required="required" placeholder="Enter work_experience_des..."></textarea>
	</div>
	<div class="form-group">
		<textarea class="form-control" rows="5" name="education_des" required="required" placeholder="Enter education_des..."></textarea>
	</div>
	<input type="file" class="fl_avatar form-control-file border" name="images"> </br>
	<input type="file" class="fl_avatar form-control-file border" name="avatar"> 
	<div class="form-group">
		<select name="user_id" class="form-control" id="user_id">
			@foreach($user as $key)
				<option value="{{ $key->id }}">{{ $key->name }}</option>}
			@endforeach
		</select>
	</div>
	<div class="form-group text-center">
		@csrf
		<button type="submit" class="btn btn-primary">Add CV</button>
	</div>
</form>
@endsection