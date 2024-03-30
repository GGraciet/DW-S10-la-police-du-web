@extends('layouts.app')

@section('title', 'Reservations')

@section('content')
    <h1>Reservations</h1>

    <a href="{{ route('reservations.create') }}">Create a reservation</a>

    @foreach($reservations as $reservation)
        <div>
            <h2>Reservation #{{$reservation->id}}</h2>
            <p>Destination: {{$reservation->destination}}</p>
            <p>Reservation made by {{$reservation->name}} on {{$reservation->created_at}} </p>
        </div>
    @endforeach
@endsection