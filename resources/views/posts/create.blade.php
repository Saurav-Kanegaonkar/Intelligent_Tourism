@extends('layouts.app')

@section('content')
    <style>
        body{
            background-color: #F5F5F5;
        }
    </style>
    <h2>Create Posts</h2>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class'=>'ckeditor form-control', 'placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
    <script>
        var element = document.getElementById("myDIV");
        element.classList.add("act");
    </script>
    
@endsection