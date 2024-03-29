@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact us</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div>
            <label for="phone">Phone :</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
            @if ($errors->has('phone'))
                <p>{{ $errors->first('phone') }}</p>
            @endif
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif
        </div>
        
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message">
                {{ old('message') }}
            </textarea>
            @if ($errors->has('message'))
                <p>{{ $errors->first('message') }}</p>
            @endif
        </div>

        <input type="submit" value="Send">
    </form>
@endsection
