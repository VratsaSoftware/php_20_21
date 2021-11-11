@extends('layouts.master')

<h1>Categories</h1>


@section('content')
{!! Form::open(['url' => 'categories']) !!}
@csrf
<div class="form-group">
	<label>Category name</label>
	<input type="text" name="category_name" value="{{ old('category_name') }}">
	@if( $errors->has('category_name') )
		{{ $errors->first('category_name') }}
	@endif
	@error('category_name')
    		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

</div>
<div class="form-group">
	<label>Category Description</label>
	<textarea name="category_description">{{ old('category_description')}}</textarea>
	@if( $errors->has('category_description') )
		{{ $errors->first('category_description') }}
	@endif
</div>	

<input type="submit" name="category_save" value="Save">	
{!! Form::close() !!}

@endsection

