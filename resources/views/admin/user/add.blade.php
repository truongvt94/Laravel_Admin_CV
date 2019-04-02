@extends('Admin.Home')
@section('content')
<h1 class="text-center">Thêm User</h1><br>
<form class="frm-add" method="post" enctype="multipart/form-data" action="{{route('user.store')}}">

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
    <input type="email" class="form-control" name="email_verified_at" required="required" placeholder="Enter confirm email...">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" required="required" placeholder="Enter password...">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password_verified_at" required="required" placeholder="Enter confirm password...">
  </div>
  <input type="text" id="datepicker" name="date" placeholder="Year/ Month/ Day">
  <div class="form-group">
    <select name="type" class="form-control" id="sel1">
      <option>--User Decentralization--</option>
      <option value="super">Super Admin</option>
      <option value="admin">Admin</option>
      <option value="hr">Hr</option>
      <option value="member">Member</option>
    </select>
  </div>
  <input type="file" class="fl_avatar form-control-file border" name="avatar">
  <div class="form-group text-center">
    @csrf
    <button type="submit" class="btn btn-primary">Add User</button>
  </div>
</form>
@endsection