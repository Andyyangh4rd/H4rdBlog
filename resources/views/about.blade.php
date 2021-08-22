@extends('layouts/main')

@section('container')
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $role}}</p>
<img src="img/{{ $img }}" width="200" class="img-thumbnail rounded-circle">
@endSection()