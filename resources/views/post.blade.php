@extends('layouts/main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/blogs">Back To Posts</a>
</article>
@endSection()