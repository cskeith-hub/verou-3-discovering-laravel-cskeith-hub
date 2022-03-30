@extends('layouts.layout')

@section('body')
    <h1>exercisePage 1<h1>

        @foreach ($coaches as $coach)
        <ul>
            <li>{{ $coach->name }}</li> 
        </ul>
        @endforeach  
@endsection