@extends('templates.base')

@section('pageTitle', 'Create new comics listing')

@section('pageMain')

<div class="container p-5">
        <div class="row row-cols-3 g-4">
            @foreach ($comics as $comic)
                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                          <h3 class="card-title mb-4">{{ $comic->title }}</h3>
                          <p class="card-text overflow-scroll mb-5" style="max-height: 250px">{{ $comic->description }}</p>
                          <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary" style="position: absolute; left: 1rem; bottom: 1rem">See more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
