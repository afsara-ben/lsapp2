@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
    <h1>{{$post->title}}</h1> 
    <div>
        {{$post->body}}    
    </div>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>  
    <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger">Delete</a>  
@endsection