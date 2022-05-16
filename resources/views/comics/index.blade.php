@extends('templates.base')

@section('pageTitle', 'Comics listing')

@section('pageMain')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale_Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->description }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
