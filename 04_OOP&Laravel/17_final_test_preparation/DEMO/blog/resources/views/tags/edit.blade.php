@extends('layouts.master')

<h1>Edit Tag {{ $tag->tag }}</h1>

@section('content')
    <form action="{{ route('tags.update', $tag->id) }}" method="post">
        @csrf
        @method('put')
        <div clas="form-group">
            <label for="tag">Tag Name</label>
            <input id="tag" type="text" name="tag" value="{{ $tag->tag }}">
        </div>
        <div clas="form-group">
            <label for="description">Description</label>
            <input id="description" type="text" name="description" value=" {{ $tag->description ?? '' }}">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
