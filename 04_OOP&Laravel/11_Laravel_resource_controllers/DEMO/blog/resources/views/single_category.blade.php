@extends('layouts.master')

<h1>Category Title {{$category->name}}</h1>
<h3>Category Title {{$category->description}}</h3>

@section('content')

<h3>Posts:</h3>
<table class="table table-responsive">
<thead>
    <tr>
        <th scope="col">Post Title</th>
        <th scope="col">Post Content</th>
    </tr>
</thead>
<tbody>
 @foreach ($category->posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content}}</td>
    </tr>
       
@endforeach
</tbody>


</table>

@endsection
