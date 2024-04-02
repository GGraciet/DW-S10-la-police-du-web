@extends('layouts.app')

@section('title', 'Country created')

@section('content')
    <h1>Country created !</h1>
    <p>{{ $country->name }} has been successfully created.</p>
    <a href="{{ route('countries.index')}}">View countries</a>
@endsection