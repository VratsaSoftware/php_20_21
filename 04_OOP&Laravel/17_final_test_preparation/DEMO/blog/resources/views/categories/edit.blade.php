@extends('layouts.master')

<h1>Categories</h1>

@section('content')

<form action="{{ route( 'categories.update', $category->id ) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label>Category name</label>
    <input type="text" name="category_name" value="{{ $category->name }}">
    @if( $errors->has('category_name') )
		{{ $errors->first('category_name') }}
	@endif
    <label>Category Description</label>
    <textarea name="category_description">{{ $category->description }}</textarea>
    <input type="submit" name="category_save" value="Save">
</form>

@endsection

