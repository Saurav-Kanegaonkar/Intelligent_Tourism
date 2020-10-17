@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-info" style="color: black !important">Back</a>
    <br><br>
    @if ($post)
        <div>
            <img style='width: 300en; height:400px' src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>
        <h2>{{$post->title}}</h2>
        <div>
            {!! $post->body !!}
        </div>
        <br>
        <small>Written on {{$post->created_at}}</small>
    @else
        <p>No posts found ;_;</p>
    @endif
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning"  style="color: black !important">Edit</a>
            {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'Post', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif 
    @endif
    
@endsection