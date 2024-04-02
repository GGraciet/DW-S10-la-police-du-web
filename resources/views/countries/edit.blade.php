@extends('layouts.app')

@section('title', 'Edit country')

@section('content')
    <h1>Edit country</h1>

    <form action="{{ route('countries.update', ['id' => $country->id]) }}" method="post">
        @method('PUT')
        @csrf

        <div>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" value={{ $country->name }} />
            @if($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div>
            <label for="code">Code :</label>
            <input type="text" name="code" id="code" value="{{ $country->code }}" />
            @if($errors->has('code'))
                <p>{{ $errors->first('code') }}</p>
            @endif
        </div>

        <input type="submit" value="Save">
    </form>

    <a href="{{ route('countries.index')}}">Back to countries</a>
@endsection