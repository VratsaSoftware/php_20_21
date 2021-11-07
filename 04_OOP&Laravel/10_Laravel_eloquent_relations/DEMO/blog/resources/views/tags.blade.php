@extends('layouts.master')

<h1>Tags</h1>

@section('content')
    {{ dd(Session::all()) }}
    @if ($message = Session::get('message'))
        <div class="bg-success">
            {{ $message }}
        </div>
    @endif
    @if (!is_null($tags) && !$tags->isEmpty())
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">Tag</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->tag }}</td>
                        <td>
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    @endif

    <a href="{{ route('tags.create') }}" class="btn btn-primary">Create</a>

@endsection
