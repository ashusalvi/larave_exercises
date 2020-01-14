@extends('layouts.app')

@section('web_title')
Add Company
@endsection

@section('content')

<div class="container">
    <form action="/company" method="POST">
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
            <p>{{ $errors->first('name') }}</p>
        </div>
        <div class="form-group">
            <label for="description">Company Description</label>
            <textarea class="form-control" name="decription" id="description" cols="30">{{old('decription')}}</textarea>
            <p>{{ $errors->first('decription') }}</p>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection