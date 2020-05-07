@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div class="card card-body bg-light">
        {!!$post->body!!}
    </div>
    <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit Post</a>
<hr>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden ('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' =>'btn btn-danger'])}}

{!!Form::close()!!}
@endsection