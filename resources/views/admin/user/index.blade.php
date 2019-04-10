@can('show-list')
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
<h1 class="daylah1 text-center">List User</h1>

<a href="{!! route('user.create') !!}"><button class="btn btn-primary">Add User</button></a>

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
		@foreach($users as $key)
		<tr>
			<th scope="row">{{$key->id}}</th>
			<td>{{ $key->name }}</td>
			<td>{{ $key->email }}</td>
			<td>{{ $key->phone }}</td>
			<td>{{ $key->type }}</td>
			<td>{{ $key->avatar }}</td>
			<td class="text-center">
				<button>
					<a href="{!! route('user.edit',$key->id) !!}" >
						<i class="fas fa-edit"></i>
					</a>
				</button>

				<form action="{{ route('user.destroy',$key->id) }}" method="post">
					@csrf
					@method('DELETE')
					<button type="submit">
						<i class="far fa-trash-alt"></i>
					</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="row d-flex justify-content-center">
	{{ $users->links() }}
</div>
@endsection
@else
<script type="text/javascript" charset="utf-8" async defer>
	window.location.href = "{{env('APP_URL')}}home";
</script>
@endcan