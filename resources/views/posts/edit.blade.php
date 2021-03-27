@extends('layouts.app')

@section('content')
    <h1>Create a post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') ?? $post->title }}"class="form-control" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" value="{{ old('body') ?? $post->body }}" class="form-control" id="body" placeholder="body">
        </div>
        @method("PUT")
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
