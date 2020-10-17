@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style='width:100%; height:100%' src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
        
    @else
        <p>No posts found ;_;</p>
    @endif
    
@endsection