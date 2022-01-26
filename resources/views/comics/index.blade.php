@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Type</th>
                    <th>Sale Date</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection