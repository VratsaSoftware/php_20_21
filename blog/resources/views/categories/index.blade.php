@extends('layouts.master')

<h1>Categories</h1>

@section('content')

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
        <td>{{ $category->name }}</td>
        <td>{{ $category->description}}</td>
        <td> <a href="{{ route('categoryDetails', ['id' => $category->id])}}"> Details</a></td>
    </tr>
       
    @endforeach

</tbody>


</table>

@endsection

