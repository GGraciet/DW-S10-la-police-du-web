@extends('layouts.app')

@section('title', 'Create country')

@section('content')
    <h1>Create country</h1>

    <form action="{{ route('countries.store') }}" method="post">
        @csrf

        <div>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" value={{ old('name') }} />
            @if($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div>
            <label for="code">Code :</label>
            <input type="text" name="code" id="code" value="{{ old('code') }}" />
            @if($errors->has('code'))
                <p>{{ $errors->first('code') }}</p>
            @endif
        </div>

        <input type="submit" value="Create">
    </form>

    <a href="{{ route('countries.index')}}">Back to countries</a>
@endsection