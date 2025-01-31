@extends('layouts.main')
{{-- @dd($post); --}}
@section('container')

<h2>{{ $post->title }}</h2>

<p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

{!! $post->body !!}

<a href="/posts" class="text-decoration-none d-block mt-3">Back to Posts</a>
@endsection