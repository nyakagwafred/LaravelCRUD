@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Blog Title...'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body','', ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Body...'])}}
    </div>
    {{Form::Submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
    
    </div>

    
@endsection