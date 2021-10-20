@extends('layouts.master')

<h1>Categories</h1>

@section('content')
<a href="{{ route('categories.create') }}">Add category</a>
<table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)  
        <tr>
            <td><a href="{{ route('categories.edit', $category->id ) }}">{{ $category->name }}</a></td>
            <td>{{ $category->description}}</td>
            <td> <a href="{{ route('categoryDetails', ['id' => $category->id])}}"> Details</a></td>
            <td>
                <form action="{{ route('categories.destroy', $category->id ) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        
        @endforeach

    </tbody>


</table>

@endsection

