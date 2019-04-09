@extends('Admin.home')
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
<h1 class="text-center">List User
<div class="alert alert-success">
	Keyword Search: {{ $keyword }}<br>
	Amount record find: {{ count($user) }}
</div>

@if(Session::has('success'))
<div class="alert alert-success">
	{{ Session::get('success') }}
</div>
@endif

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Phone Number</th>
			<th scope="col">User Type</th>
			<th scope="col">Avatar</th>
			<th scope="col">Manipulation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $key)
		<tr>
			<th scope="row">{{ $key->id }}</th>
			<td>{{ $key->name }}</td>
			<td>{{ $key->email }}</td>
			<td>{{ $key->phone }}</td>
			<td>{{ $key->type }}</td>
			<td>{{ $key->avatar }}</td>
			<td class="text-center"><a href="{!! route('user.update',$key->id) !!}" ><i class="fas fa-edit"></i></a>
				<a onclick="return ConfirmDelete('Delete Y/N')" href="{!! route('user.destroy',$key->id) !!}"><i class="far fa-trash-alt"></i></button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="row d-flex justify-content-center">
	{{ $user->appends([
		'user' => $user,
		'keyword' => $keyword,
		])
		->links() }}
	</div>
	@endsection