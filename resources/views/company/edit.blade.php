@extends('layouts.app')

@section('web_title')
Edit Company : {{$company->name}}
@endsection

@section('content')

<div class="container">
    <form action="/company/{{$company->id}}" method="POST">
        @method('PATCH')
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$company->name}}">
            <p>{{ $errors->first('name') }}</p>
        </div>
        <div class="form-group">
            <label for="description">Company Description</label>
            <textarea class="form-control" name="decription" id="description"
                cols="30">{{$company->decription}}</textarea>
            <p>{{ $errors->first('decription') }}</p>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection