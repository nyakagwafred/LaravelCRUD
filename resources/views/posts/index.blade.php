@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Recent Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div style="margin-top:5px" class="card card-body bg-light">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Writen on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
    <p>No posts found</p> 
    @endif
    </div>
    
@endsection