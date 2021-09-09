@extends('layouts.layout')

@section('content')
    <h1>Show Car</h1>
    <div style="color: {{$car->color}}">
        <strong> {{$car->name}} </strong> <br>
    </div>
    <p> <strong> {{$car->company}} </strong></p>
    <a href="{{$car->id}}/edit">Edit Car</a>
@endsection