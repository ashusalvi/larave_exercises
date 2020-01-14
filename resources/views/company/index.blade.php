@extends('layouts.app')

@section('web_title')
Company List
@endsection

@section('content')

<div class="container">
    <div class="row mb-3">
        <a href="/company/create"><button type="button" class="btn btn-primary">Add Company</button></a>
    </div>
    <div class="row">

        @forelse ($companies as $company)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3>{{ $company->name }}</h3>
                    <p class="card-text"> {{ $company->decription }} </p>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="{{url('/company/'.$company->id)}}"><button type="button"
                                class="btn btn-success">View</button></a>

                        <a href="{{ url('/company/'.$company->id.'/edit') }}"><button type="button"
                                class="btn btn-primary">Edit</button></a>

                        <form action="/company/{{$company->id}}" method="POST">
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">No Company found</p>
        @endforelse

    </div>
</div>

@endsection