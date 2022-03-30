@extends('layouts.layout')

@section('body')
    <h1>exercisePage 2<h1>
    
    
        @foreach ($learners as $learner)
        <ul>
            <li>{{ $learner->name }}</li> 
        </ul>
        @endforeach  
@endsection