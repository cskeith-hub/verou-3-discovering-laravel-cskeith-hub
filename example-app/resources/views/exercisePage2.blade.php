@extends('layouts.layout')

@section('body')
    <h1>exercisePage 2<h1>
    
    
        @foreach ($learner as $learner)
        <ul>
            <li>{{ $learner->name }}</li> 
        </ul>
        @endforeach  
@endsection