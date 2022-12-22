@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <section>
        <div class="container text-center mt-4">
            <h1>Tutti i comics</h1>
            <div class="text-end">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Comic</a>
            </div>
            <div class="row row-cols-4 g-3 pt-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">Serie: {{ $comic->series }}</p>
                                <p class="card-text">Tipo: {{ $comic->type }}</p>

                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vedi dettagli</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success">Modifica</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
