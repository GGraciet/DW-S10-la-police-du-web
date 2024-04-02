@extends('layouts.app')

@section('title', 'Country edited')

@section('content')
    <h1>Country edited !</h1>
    <p>{{ $country->name }} has been successfully edited.</p>
    <a href="{{ route('countries.index')}}">View countries</a>
@endsection