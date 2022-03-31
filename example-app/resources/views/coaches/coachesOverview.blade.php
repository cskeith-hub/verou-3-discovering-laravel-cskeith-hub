@extends('layouts.layout')

@section('body')

    <h1>Coaches Overview<h1>

    @foreach ($coaches as $coach)
    <ul>
        <li>{{ $coach->name }}</li> 
        <li>{{ $coach->group_id }}</li> 
    </ul>
    @endforeach 

@endsection