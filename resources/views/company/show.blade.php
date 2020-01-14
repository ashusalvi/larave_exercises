@extends('layouts.app')

@section('web_title')
Company Details : {{$company->name}}
@endsection

@section('content')

<main role="main" class="container">
    <div class="jumbotron">
        <h1>{{$company->name}}</h1>
        <p class="lead">{{$company->decription }}</p>
    </div>
</main>

@endsection