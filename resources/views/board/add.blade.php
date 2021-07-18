@extends('layouts.helloapp')

@section('title','Board.Add')

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="add" method="POST">
    <table>
        @csrf
        <tr><th>name: </th><td><input type="text" name="person_id"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="title"}"></td></tr>
        <tr><th>age:  </th><td><input type="number" name="message"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@section('footer')
copyright 2020 oic
@endsection
