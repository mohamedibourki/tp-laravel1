@extends('layouts.app')

@section('content')
    <form action="">
        <label for="email">Email address</label>
        <input type="email" name="email" id="email" placeholder="name@example.com">

        <br>
        <br>

        <label for="message">Message</label>
        <input type="text" name="message" id="message">
    </form>
@endsection