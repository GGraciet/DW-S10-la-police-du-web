
@extends('layouts.app')

@section('title', 'Countries')

@section('content')
    <h1>Countries</h1>

    <a href="{{ route('countries.create') }}">Create country</a>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr>
                    <td>{{ $country->id }}</td>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->code }}</td>
                    <td>
                        <a href="{{ route('countries.show', ['id' => $country->id]) }}">View</a> 
                        <a href="{{ route('countries.edit', ['id' => $country->id]) }}">Edit</a> 
                        <form action="{{ route('countries.destroy', ['id' => $country->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete">
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection