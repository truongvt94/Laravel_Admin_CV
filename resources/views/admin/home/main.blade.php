@extends('Admin/Home')
@section('content')
<form action="{!! route('timkiem') !!}" method="get" class="navbar-form form-search">
	@csrf            
	<div class="input-group no-border">
		<input type="text" name="keyword" class="form-control" placeholder="Search...">
		<button type="submit" class="btn btn-white btn-round btn-just-icon">
			<i class="material-icons">search</i>
			<div class="ripple-container"></div>
		</button>
	</div>
</form>
</br>
<div class="row">
	<div class="col-md-12">
		<h1>List CV</h1>
		<div class="btn-create">
			<a href="{{ route('home.create') }}" class="btn btn-topcv-primary btn-sm">
				<span class="fa fa-plus-circle"></span>  Create
			</a>
		</div>
	</div>
</div>
@if(Session::has('success'))
	<div class="alert alert-success">
		{{ Session::get('success') }}
	</div>
@endif
<div class="container-fluid">
	@foreach($show as $key)
	<div class="row cv">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2 avatar">
					<img src="public/images/{{ $key->avatar }}" alt="">
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-8">
							<p class="title">{{ $key->name }}</p>
						</div>
						<div class="col-md-4">
							<i class="fa fa-clock-o text-highlight">  {{ $key->created_at }}</i>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 link">
							<p> {{ url($key->id) }} </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 text-center">
							<button type="submit"><i class="fa fa-download"></i>  Download  </button>
						</div>
						<div class="col-md-3 text-center">
							<button type="submit"><i class="fa fa-eye"></i>  View  </button>
						</div>
						<div class="col-md-3 text-center">
							<a href="{!! route('home.create', $key->id) !!}"><button type="submit"><i class="fa fa-pencil"></i>  Edit  </button></a>
						</div>
						<form action="{!! route('home.destroy', $key->id) !!}" method="post">
							@csrf
							@method('DELETE')
							<div class="col-md-3 text-center">
								<button type="submit" style="width: 100px"><i class="fa fa-trash"></i>  Delete  </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><hr>
	@endforeach
</div>
@endsection