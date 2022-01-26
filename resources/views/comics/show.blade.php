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
        <div>
            <img src="{{ $comic->thumb }}" alt="{{ 'Cover ' . $comic->title }}">
            <p>{{ $comic->description }}</p>
        </div>
    </div>
@endsection