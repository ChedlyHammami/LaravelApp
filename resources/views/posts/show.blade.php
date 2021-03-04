@extends('layouts.app')

@section('content')
    <a href="/laravelapp/public/posts" class="btn btn-default" style="background-color: aqua">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:60%;" src="../storage/cover_images/{{ $post->cover_image }}">
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{ $post->user->name }}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/laravelapp/public/posts/{{$post->id}}/edit" class="btn btn-default" style="background-color: aqua;">Edit</a>
            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'style' => 'float:right;'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif
    @endif
@endsection 