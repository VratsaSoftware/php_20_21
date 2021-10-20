@extends('layouts.master')

<h1>Categories</h1>

@section('content')
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label>Category name</label>
    <input type="text" name="category_name">
    <label>Category Description</label>
    <textarea name="category_description"></textarea>
    <input type="submit" name="category_save" value="Save">
</form>

@endsection

