@extends('layouts.layout')

@section('content')
<h2 class="text-center">Create Car</h2>
<div class="container">
    <form action="/cars" class="form-horizontal" method="post">
        @csrf
        <fieldset>

            <legend></legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control input-md" value="{{old('name')}}">
                    @if($errors->any())
                    
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>

                     @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="color">Color</label>
                <div class="col-md-4">
                    <input type="text" id="color" name="color" placeholder="Enter color" class="form-control input-md" value="{{old('color')}}">
                    @if($errors->any())
                    
                        <div class="text-danger">
                            {{$errors->first('color')}}
                        </div>

                     @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="company">Company</label>
                <div class="col-md-4">
                    <input type="text" id="company" name="company" placeholder="Enter company name" class="form-control input-md" value="{{old('company')}}">
                    @if($errors->any())
                    
                        <div class="text-danger">
                            {{$errors->first('company')}}
                        </div>

                     @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </fieldset>
    </form>

    <!-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
    @endif -->

    <div>
    <br>
	<a href="/cars">Show Cars</a>
    </div>
</div>
@endsection