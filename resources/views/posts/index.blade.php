@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div style="
                background-color:aqua;
                border:solid 1px rgb(216, 216, 216);
                margin-bottom:10px;
                border-radius:5px;
                padding:10px;
            ">
                
                    <div class="row">
                        <div class="col-md-4 col-sm-4" style="height:50%;">
                            <img style="width:200px;" src="storage/cover_images/{{ $post->cover_image }}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/laravelapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{ $post->user->name }}</small>
                        </div>
                    </div>
   
                
            </div>
        @endforeach 
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection 