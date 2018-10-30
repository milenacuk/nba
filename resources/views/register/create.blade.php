@extends('layouts.master')

@section('title')
Login
@endsection


@section('body')
<form method = 'post' action = '/register'>

{{ csrf_field() }}
  <div class="form-group">
    <label>Name</label>
    <input name = 'name' type="text" class="form-control" id="name" placeholder="Enter name">
      
  </div>
  <div class="form-group">
    <label>Email</label>
    <input name = 'email' type="text" class="form-control" id="email" placeholder="Enter email">
      
  </div>
  <div class="form-group">
    <label>Password</label>
    <input name = 'password' type="password" class="form-control" id="password" placeholder="Enter password">
      
  </div>
  <div class="form-group">
    <label>Password confirmation</label>
    <input name = 'password_confirmation' type="password" class="form-control" id="password_confirmation" placeholder="Enter password confirmation">
     
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection