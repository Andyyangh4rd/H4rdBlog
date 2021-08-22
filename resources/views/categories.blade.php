@extends('layouts/main')

@section('container')
<h1>Post Category</h1>

@foreach($posts as $post)
<article class="mb-5">
    <ul>
        <li>
            <h2><a href="/categories/{{ $post->slug }}">{{ $post->name }}</a></h2>
        </li>
    </ul>
</article>
@endforeach

@endSection()