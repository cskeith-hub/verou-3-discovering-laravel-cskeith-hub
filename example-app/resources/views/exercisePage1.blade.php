@extends('layouts.layout')

@section('body')
    <h1>exercisePage 1<h1>

        @foreach ($coach as $coach)
        <ul>
            <li>{{ $coach->name }}</li> 
        </ul>
        @endforeach  
        <p>{{$coach}}</p>
@endsection