@extends('layouts.app')

@section('title', 'Country deleted')

@section('content')
    <h1>Country deleted !</h1>
    <p>{{ $country->name }} has been successfully deleted.</p>
    <a href="{{ route('countries.index')}}">View countries</a>
@endsection