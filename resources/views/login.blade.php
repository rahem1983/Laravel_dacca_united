@extends('layout')

@section('content')

<form action="{{url('api/login')}}" method="post">
    @csrf
    <label for="username">First name:</label><br>
    <input type="text" id="username" name="username" value="{{old('username')}}"><span style="color: red;"></span><br>
    <label for="email">email:</label><br>
    <input type="email" id="email" name="email" ><span style="color: red;"></span><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" ><span style="color: red;"></span><br><br>
    
    <button type="submit" >Submit</button>
  </form>
@stop