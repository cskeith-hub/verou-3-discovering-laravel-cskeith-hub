@extends('layouts.layout')

@section('body')

<br>
<form action="/addStudent" method="post">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="fname" id="fname" name="fname" value=""><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value=""><br><br>
    <label for="group">Group Id:</label><br>
    <input type="group" id="group" name="group" value=""><br><br>
    <input type="submit" id="submit" value="Submit">
</form>
<br>

@endsection