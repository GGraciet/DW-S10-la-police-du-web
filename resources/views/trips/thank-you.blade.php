@extends('layouts.app')

@section('title', 'Make a reservation')

@section('content')
    <h1>Thank you {{$name}}!</h1>
    <p>Your reservation for {{$destination}} has been confirmed.</p>

    @if($age < 18)
        <p>As you are under 18, please make sure to bring a signed parental authorization.</p>
    @else
        <p>As you are an adult, no further administraive step is required.</p>
    @endif
@endsection