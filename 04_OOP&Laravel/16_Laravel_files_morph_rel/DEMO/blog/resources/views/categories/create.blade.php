@extends('layouts.master')

<h1>Categories</h1>

@section('content')
    {!! Form::open(['url' => 'categories', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <label>Category name</label>
    <input type="text" name="category_name">
    <label>Category Description</label>
    <textarea name="category_description"></textarea>
    <div class="form-group">
        <label for="image"> Upload Tag Image</label>
        <input type="file" name="image_file" id="image">
        @error('image_file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" name="category_save" value="Save">
    {!! Form::close() !!}

@endsection
