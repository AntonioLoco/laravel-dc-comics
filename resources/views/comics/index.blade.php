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
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Cancellare
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma Cancellazione
                                                    di {{ $comic->title }}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Sei sicuro di voler cancellare il comic?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
