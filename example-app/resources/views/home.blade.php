@extends('layouts.layout')

@section('body')
    <h1>Welcome to the HomePage from Colin Renkema<h1>

    <form action="/home" method="post">
        @csrf
        <label for="name">First name:</label><br>
        <input type="text" id="name" value=""><br><br>
        <input type="submit" value="Submit">
    </form>
@endsection