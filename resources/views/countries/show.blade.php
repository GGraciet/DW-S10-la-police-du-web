
@extends('layouts.app')

@section('title', $country->name . ' details')

@section('content')
    <h1>{{$country->name}} details</h1>
    <p>Name : {{ $country->name }}</p>
    <p>Code : {{ $country->code }}</p>

    <a href="{{ route('countries.edit', ['id' => $country->id]) }}">Edit</a>

    <a href="{{ route('countries.index')}}">Back to countries</a>
@endsection