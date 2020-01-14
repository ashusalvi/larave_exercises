@extends('layouts.app')

@section('web_title')
Customer List
@endsection

@section('content')

<div class="container marketing">
    <div class="row mb-5 ">
        <a href="/company/create"><button type="button" class="btn btn-primary">Add Customer
            </button>
        </a>
    </div>
    <div class="row ">

        @foreach ($customers as $customer)
        <div class="col-lg-4">
            <h4>Name : {{$customer->name}}</h4>
            <h5>Company : {{$customer}}</h5>
            <p><a class="btn btn-secondary" href="#" role="button">View Details »</a></p>
        </div>
        @endforeach

    </div>
</div>

@endsection