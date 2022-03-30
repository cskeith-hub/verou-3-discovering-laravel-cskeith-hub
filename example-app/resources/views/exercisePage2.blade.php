@extends('layouts.layout')

@section('body')
    <h1>Learners Overview<h1>
    
    
        @foreach ($learners as $learner)
        <ul>
            <li>{{ $learner->name }}</li> 
        </ul>
        @endforeach  
@endsection