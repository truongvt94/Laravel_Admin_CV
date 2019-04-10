@extends('Admin.Home')
@section('content')
<h1 class="daylah1 text-center">Danh Sách CV</h1>
<a href="{!! route('cv.create') !!}"><button class="btn btn-primary">Add CV</button></a>
@if(Session::has('success'))
<div class="alert alert-success">
	{{ Session::get('success') }}
</div>
@endif
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">name</th>
			<th scope="col">phone</th>
			<th scope="col">email</th>
			<th scope="col">developer</th>
			<th scope="col">avatar</th>
			<th scope="col">user id</th>
			<th scope="col">Manipulation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cvs as $key)
		<tr>
			<th scope="row">{{$key->id}}</th>
			<td>{{ $key->name }}</td>
			<td>{{ $key->phone }}</td>
			<td>{{ $key->email }}</td>
			<td>{{ $key->developer }}</td>
			<td>{{ $key->images }}</td>
			<td>{{ $key->user_id }}</td>
			<td class="text-center">
				<button>
					<a href="{!! route('cv.edit',$key->id) !!}" >
						<i class="fas fa-edit"></i>
					</a>
				</button>
				<form action="{{ route('cv.destroy',$key->id) }}" method="post">
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
	{{ $cvs->links() }}
</div>
@endsection