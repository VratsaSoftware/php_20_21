@extends('layouts.master')

<h1>Edit tag {{ $tag->tag }}</h1>

@section('content')

    <form class="form" method="post" action="{{ route('tags.update', $tag->id) }}">
        @method('PUT')
        @csrf
        <div class="form_group">
            <label for="tag">Tag</label>
            <input class="form-control" id="tag" type="text" name="tag" value="{{ $tag->tag ?? '' }}">
        </div>
        <div>
            <button type="submit" class="btn btn-success"> Submit</button>
        </div>
    </form>



@endsection
