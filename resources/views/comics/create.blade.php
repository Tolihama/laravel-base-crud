@extends('layouts.main')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="py-3">
                <label class="form-label" for="title">Titolo</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="py-3">
                <label class="form-label" for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="py-3">
                <label class="form-label" for="thumb">Thumb url</label>
                <input class="form-control" type="text" name="thumb" id="thumb">
            </div>

            <div class="py-3">
                <label class="form-label" for="series">Serie</label>
                <input class="form-control" type="text" name="series" id="series">
            </div>

            <div class="py-3">
                <label class="form-label" for="type">Tipo</label>
                <select class="form-control" name="type" id="type">
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>

            <div class="py-3">
                <label class="form-label" for="sale_date">Data di vendita</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date">
            </div>

            <div class="py-3">
                <label class="form-label" for="price">Prezzo</label>
                <input class="form-control" type="number" name="price" id="price" step=".01">
            </div>

            <div class="py-3">
                <button type="submit" class="btn btn-primary">Invia nuovo comic</button>
                <a href="{{ route('comics.index') }}" class="btn btn-danger">Annulla creazione</a>
            </div>
        </form>
    </div>
@endsection