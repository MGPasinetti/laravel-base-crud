@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="container">
        <div class="row g-4">
            <div class="col-8">
                <h2>{{ $comic->title }}</h2>
                <h5>{{ $comic->series }}</h5>
                <p>{{ $comic->description }}</p>
                <p>TYPE: {{ $comic->type }}</p>
                <h4>{{ $comic->price }}£</h4>
                <p>SALE DATE: {{ $comic->sale_date }}</p>
            </div>
        </div>
        <a href="{{ url()->previous() }}">Back</a>
    </div>
@endsection


