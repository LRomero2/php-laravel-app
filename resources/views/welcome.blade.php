@extends('layout')

@section('content')
<div class="search-container">
    <h1>Search Weather</h1>
    <form action="" method="GET">
        <p><label for="city">Enter your City Name</label></p>
        <p><input type="text" name="city" id="city" placeholder="City Name"></p>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        <div class="output"></div>
    </form>
</div>

@stop

