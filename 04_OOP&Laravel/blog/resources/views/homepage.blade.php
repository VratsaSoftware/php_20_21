@extends('layouts.master')

@push('head')
    <link rel="stylesheet" href=" {{ asset('styles/style.css') }}"> 

@endpush

@section('title','VSO Students Blog')
    

@section('content')

<h2> This is landing page</h2>

<div>
    Info 
</div>
    
@endsection

@push('foot')
    <h3> Time, Date</h3>
@endpush