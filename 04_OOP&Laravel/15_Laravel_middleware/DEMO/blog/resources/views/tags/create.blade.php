@extends('layouts.master')

<h1>Create New Tag</h1>

@section('content')
    {{-- {{ dd($errors->any()) }} --}}
    @if ($errors->any())
        {{-- {{ dd($errors->all()) }} --}}
        <div class="alert alert-danger">
            Error found!
            {{-- <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul> --}}
        </div>

    @endif

    {!! Form::open(['url' => 'tags']) !!}
    <div clas="form-group">
        <label for="tag">Tag Name</label>
        <input id="tag" class="@error('tag') border border-danger @enderror" type="text" name="tag"
            value="{{ old('tag') }}" autocomplete="off">
        @error('tag')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div clas="form-group">
        <label for="description">Description</label>
        <input id="description" type="text" name="description" value="{{ old('description') }}">
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div clas="form-group">
        <label for="url">External URL</label>
        <input id="url" type="text" name="url" value="{{ old('url') }}">
        @error('url')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div clas="form-group">
        <label for="email">Editor's Group Email</label>
        <input id="email" type="text" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    {!! Form::close() !!}



@endsection
