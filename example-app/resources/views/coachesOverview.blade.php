@extends('layouts.layout')

@section('body')
    <h1>Coaches Overview<h1>

        @foreach ($coach as $coach)
        <ul>
            <li>{{ $coach->name }}</li> 
        </ul>
        @endforeach  
@endsection