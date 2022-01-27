@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="pb-3">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Crea nuovo record</a>
        </div>

        @if (session('deleted'))
            <div class="pb-3 alert alert-success">
                "{{ session('deleted') }}" è stato cancellato con successo.
            </div>
        @endif

        <table class="table align-middle">
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
                        <td class="d-flex">
                            <a class="btn btn-primary me-2" href="{{ route('comics.show', $comic->id) }}">Show</a>
                            <a class="btn btn-success mx-2" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger ms-2" type="submit" value="Delete"
                                onclick="return confirm('Sicuro di voler cancellare il record?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection