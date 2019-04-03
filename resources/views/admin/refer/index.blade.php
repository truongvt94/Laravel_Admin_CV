@extends('Admin.Home')
@section('content')
<h1 class="daylah1 text-center">Danh Sách User</h1>
<a href="{!! route('refer.create') !!}"><button class="btn btn-primary">Add Users</button></a>
@if(Session::has('success'))
<div class="alert alert-success">
	{{ Session::get('success') }}
</div>
@endif
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">avatar</th>
			<th scope="col">Content</th>
			<th scope="col">Manipulation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($show as $key)
		<tr>
			<th scope="row">{{$key->id}}</th>
			<td>{{ $key->avatar }}</td>
			<td>{{ $key->content }}</td>
			<td class="text-center">
				<button>
					<a href="{!! route('refer.edit',$key->id) !!}" >
						<i class="fas fa-edit"></i>
					</a>
				</button>
				<form action="{{ route('refer.destroy',$key->id) }}" method="post">
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
	{{ $show->links() }}
</div>
@endsection