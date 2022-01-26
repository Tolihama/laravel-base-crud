@extends('layouts.main')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="row py-3">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="row py-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="3"></textarea>
            </div>

            <div class="row py-3">
                <label for="thumb">Thumb url</label>
                <input type="text" name="thumb" id="thumb">
            </div>

            <div class="row py-3">
                <label for="series">Serie</label>
                <input type="text" name="series" id="series">
            </div>

            <div class="row py-3">
                <label for="type">Tipo</label>
                <select name="type" id="type">
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>

            <div class="row py-3">
                <label for="sale_date">Data di vendita</label>
                <input type="date" name="sale_date" id="sale_date">
            </div>

            <div class="row py-3">
                <label for="price">Prezzo</label>
                <input type="number" name="price" id="price" step=".01">
            </div>

            <button type="submit"  class="btn btn-primary">Invia nuovo comic</button>

        </form>
    </div>
@endsection