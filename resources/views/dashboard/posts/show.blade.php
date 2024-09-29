@extends('dashboard.layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>

<a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to My Posts</a>

<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

<form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
  @method('delete')
  @csrf
  <button class="btn btn-danger border-o" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
  </form>

<p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

{!! $post->body !!}



@endsection