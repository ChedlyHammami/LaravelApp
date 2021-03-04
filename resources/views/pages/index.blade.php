@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>wlecome to our application</p>
    <p><a href="/laravelapp/public/login" class="btn btn-primary btn-lg">Login</a> <a href="/laravelapp/public/register" class="btn btn-success btn-lg">Register</a></p>
</div>
    
@endsection