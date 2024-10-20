@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">

        <label for="content">Content</label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{ old('author') }}">

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
        </select>

        <label for="allow_comments">Allow Comments</label>
        <input type="checkbox" name="allow_comments" value="1" {{ old('allow_comments') ? 'checked' : '' }}>

        <button type="submit">Submit</button>
    </form>
@endsection
