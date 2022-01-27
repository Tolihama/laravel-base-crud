@extends('layouts.main')

@section('content')
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf

            {{-- Metodo --}}
            @method('PATCH')

            <div class="py-3">
                <label class="form-label" for="title">Titolo</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ $comic->title }}">
            </div>

            <div class="py-3">
                <label class="form-label" for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <div class="py-3">
                <label class="form-label" for="thumb">Thumb url</label>
                <input class="form-control" type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="py-3">
                <label class="form-label" for="series">Serie</label>
                <input class="form-control" type="text" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="py-3">
                <label class="form-label" for="type">Tipo</label>
                <select class="form-control" name="type" id="type">
                    <option @if ($comic->type === "comic book") selected @endif value="comic book">Comic book</option>
                    <option @if ($comic->type === "graphic novel") selected @endif value="graphic novel">Graphic novel</option>
                </select>
            </div>

            <div class="py-3">
                <label class="form-label" for="sale_date">Data di vendita</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="py-3">
                <label class="form-label" for="price">Prezzo</label>
                <input class="form-control" type="number" name="price" id="price" step=".01" value="{{ $comic->price }}">
            </div>

            <div class="py-3">
                <button type="submit" class="btn btn-primary">Modifica</button>
                <a href="{{ route('comics.index') }}" class="btn btn-danger">Annulla modifica</a>
            </div>
        </form>
    </div>
@endsection