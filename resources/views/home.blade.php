@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="well">
                <h2>{{ __('Dashboard') }}</h2>

                <div class="well-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-info" style="color:#101010 !important">Create Your Own Blog Posts</a>
                    <h3>Your Blog Posts</h3>
                    @if (count($posts ?? '') > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="color: white !important">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'Post', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    @else
                        <p>You don't have any posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
