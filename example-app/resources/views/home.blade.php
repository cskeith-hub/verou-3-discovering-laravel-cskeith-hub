@extends('layouts.layout')

@section('body')
    <h1>Welcome to the HomePage from Colin Renkema<h1>

    <form action="/home" method="post">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="fname" id="fname" name="fname" value=""><br><br>
        <input type="submit" id="submit" value="Submit">
    </form>

 
    
@endsection