@extends('Admin/Home')
@section('content')
	<h1 class="text-center">Đây Là Giao Diện Chính Của Admin</h1>
	@can('edit-profile')
		<p>anata ha user ga dekiru</p>
	@endcan
@endsection