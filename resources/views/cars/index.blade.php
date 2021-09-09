@extends('layouts.layout')

@section('content')
    <h1>List Car</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
            </tr>  
        </thead>
        @foreach($cars as $car)
        <tbody>
            <td>
                <a href="/cars/{{$car->id}}"> {{$car->name}} </a>
            </td>
        @endforeach    
        </tbody>  
    </table>
    <div>
        <a href="/cars/create">Add New Car</a>
    </div>
@endsection