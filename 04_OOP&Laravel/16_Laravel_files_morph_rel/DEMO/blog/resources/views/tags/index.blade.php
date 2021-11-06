@extends('layouts.master')

<h1>Tags</h1>

@section('content')


    {{-- @if ($message = Session::get('message'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif --}}

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @if ($error = Session::get('error'))
        <div class="alert alert-success">
            {{ $error }}
        </div>
    @endif


    <a href="{{ route('tags.create') }}" class="btn btn-primary">Add new</a>
    @if ($tags->isNotEmpty())
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">Tag</th>
                    <th scope="col">Description</th>
                    <th scope="col">Visibility</th>
                    <th scope="col">Editors Group Email</th>
                    <th scope="col">External Info Url</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td><a href="{{ route('tags.show', $tag->id) }}"> {{ $tag->tag }}</a></td>
                        <td>{{ $tag->description }}</td>
                        <td> {{ $tag->is_visible ? 'YES' : 'NO' }}</td>
                        <td> {{ $tag->email }}</td>
                        <td> {{ $tag->url ?? 'NO' }}</td>
                        {{-- <td> <img src="{{ asset('storage/' . $tag->image->image_name) }}" alt="" height="50px"></td> --}}
                        <td>
                            @if ($tag->image)
                                <img src="{{ asset('storage/' . $tag->image->image_name) }}" alt="" height="50px">
                            @else
                                No Image!
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" type="submit"> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div>
            <h3>No Tags in DB</h3>
        </div>

    @endif
@endsection
