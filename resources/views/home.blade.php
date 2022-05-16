@extends('templates.base')

@section('pageTitle', 'Create new comics listing')

@section('pageMain')

<div class="container">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h2 class="card-title mb-4"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
                            <p class="card-text overflow-scroll" style="height: 15rem"><strong>DESCRIPTION:</strong><br> {{ $comic->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
