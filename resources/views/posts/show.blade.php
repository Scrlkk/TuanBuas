@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Author: {{ $post->author }}</p>
    <p>Status: {{ $post->status }}</p>
    <p>Comments Allowed: {{ $post->allow_comments ? 'Yes' : 'No' }}</p>
@endsection
