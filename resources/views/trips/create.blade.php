@extends('layouts.app')

@section('title', 'Make a reservation')

@section('content')
    <h1>Make a reservation</h1>

    <form action={{route('reservations.store')}} method="POST">
        @csrf

        <div>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name">
            @if($errors->has('name'))
                <p>{{$errors->first('name')}}</p>
            @endif
        </div>

        <div>
            <label for="age">Age :</label>
            <input type="number" name="age" id="age">
            @if($errors->has('age'))
                <p>{{$errors->first('age')}}</p>
            @endif
        </div>

        <div>
            <label for="destination">Destination :</label>
            <select name="destination" id="destination">
                <option value="France">France</option>
                <option value="Italy">Italy</option>
                <option value="Spain">Spain</option>
            </select>
            @if($errors->has('destination'))
                <p>{{$errors->first('destination')}}</p>
            @endif
        </div>

        <input type="submit" value="Create my reservation">
    </form>
@endsection