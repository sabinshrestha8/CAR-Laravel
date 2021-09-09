@extends('layouts.layout')

@section('content')
<h2 class="text-center">Edit/Delete Car</h2>
<div class="container">
    <form action="/cars/{{$car->id}}" class="form-horizontal" method="post">
        @csrf
        @method('put')
        <fieldset>

            <legend></legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control input-md" value="{{$car->name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="color">Color</label>
                <div class="col-md-4">
                    <input type="text" id="color" name="color" placeholder="Enter color" class="form-control input-md" value="{{$car->color}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="company">Company</label>
                <div class="col-md-4">
                    <input type="text" id="company" name="company" placeholder="Enter company name"
                    class="form-control input-md" value="{{$car->company}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Update</button> 
                </div>
            </div>
        </fieldset>
    </form>  
    <form action="/cars/{{$car->id}}" class="form-horizontal" method="post">
        @csrf
        @method('delete')
        <div class="form-group">
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-danger">Delete</button> 
                </div>
            </div>
    </form>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
    @endif

    <div>
    <br>
	<a href="/cars">Show Cars</a>
    </div>
</div>
@endsection