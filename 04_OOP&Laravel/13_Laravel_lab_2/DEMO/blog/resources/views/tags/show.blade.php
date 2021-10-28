@extends('layouts.master')

<h1>Show Tag {{ $tag->tag }}</h1>

@section('content')
    <h3>Name</h3>
    <div>{{ $tag->tag }}</div>
    <h3>Description</h3>
    <div>{{ $tag->description }}</div>
    <h3>Visible?</h3>
    <div>{{ $tag->is_visible ? 'YES' : 'NO' }}</div>
@endsection
