@extends('Admin.Home')
@section('content')
<h1 class="text-center">Edit Refer</h1><br>
<form class="frm-add" method="post" enctype="multipart/form-data" action="{{ route('refer.update') }}">

  @if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
  @endif
  
  @include('error.error')

  <input type="file" class="fl_avatar form-control-file border" name="avatar">  
  <div class="form-group">
    <input type="text" class="form-control" name="content" required="required" placeholder="Enter phone...">
  </div>
  <div class="form-group text-center">
    @csrf
    <button type="submit" class="btn btn-primary">Edit Refer</button>
  </div>
</form>
@endsection