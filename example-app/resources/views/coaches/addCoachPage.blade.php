@extends('layouts.layout')

@section('body')

<br>
<form action="/addCoach" method="post">
    @csrf
    <label for="fname">Coach name:</label><br>
    <input type="fname" id="fname" name="fname" value=""><br><br>
    
    <label for="group">Group:</label><br>
    <input type="group" id="group" name="group" value=""><br><br>

    <input type="submit" id="submit" value="Submit">
</form>
<br>

@endsection