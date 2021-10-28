@extends('layouts.master')

<h1>Create New Tag</h1>

@section('content')
    <form action="{{ route('tags.store') }}" method="post">
        @csrf
        @method('post')
        <div clas="form-group">
            <label for="tag">Tag Name</label>
            <input id="tag" type="text" name="tag" value="">
        </div>
        <div clas="form-group">
            <label for="description">Description</label>
            <input id="description" type="text" name="description" value="">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
