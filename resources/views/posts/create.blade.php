@extends('layouts.app')

@section('content')
    <h1>Create a post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" class="form-control" id="article-ckeditor" placeholder="body">
        </div>
        {{-- <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
