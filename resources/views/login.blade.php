@extends('layout')
@section('title', 'login')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container">
  <h2>Student Login</h2>
  <form action="{{url('/submit')}}" Method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">email or username</label>
      <input type="text" class="form-control" id="email" placeholder="enter email or username" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">password</label>
      <input type="password" class="form-control" id="pwd" placeholder="enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>


    
@endsection
