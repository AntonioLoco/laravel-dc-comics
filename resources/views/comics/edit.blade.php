@extends('layouts.app')

@section('title', 'Modifica ' . $comic->title)
@section('content')
    <div class="container">
        <h1 class="text-center">Modifica {{ $comic->title }}</h1>
        <div class="py-5 row justify-content-center">
            <div class="col-6">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="10" name="description">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data Vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ $comic->type }}">
                    </div>
                    <button type="submit" class="btn btn-success">Modifica Comic</button>
                </form>
            </div>
        </div>
    </div>
@endsection
