@extends('layouts.main')

@section('container')


<h2 class="mb-5">{{ $post->title }}</h2>

<p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</p></a>

{!! $post->body !!}


<a href="/blog">Back to Blog</a>

@endsection