@extends('layouts.master')

<h1>TagCreate</h1>

@section('content')

    <form class="form" method="post" action="{{ route('tags.store') }}">
        @method('POST')
        @csrf
        <div class="form_group">
            <label for="tag">Tag</label>
            <input class="form-control" id="tag" type="text" name="tag" value="">
        </div>
        <div>
            <button type="submit" class="btn btn-success"> Submit</button>
        </div>
    </form>



@endsection
