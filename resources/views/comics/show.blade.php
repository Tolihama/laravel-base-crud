@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="row">
            <ul>
                <li>
                    Serie: {{ $comic->series }}
                </li>
                <li>
                    Prezzo: {{ $comic->price }}
                </li>
                <li>
                    Data di vendita: {{ $comic->sale_date }}
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-2">
                <img src="{{ $comic->thumb }}" alt="{{ 'Cover ' . $comic->title }}">
            </div>
            <div class="col-10">
                <p>{{ $comic->description }}</p>
            </div>
        </div>
        <div class="pt-3 text-center">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna ai comics</a>
        </div>
    </div>
@endsection