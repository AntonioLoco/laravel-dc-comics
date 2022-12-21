@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <section>
        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 500px;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="..." style="max-width: 100%">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">Descrizione: {{ $comic->description }}</p>
                    <p class="card-text">Serie: {{ $comic->series }}</p>
                    <p class="card-text">Tipo: {{ $comic->type }}</p>
                    <p class="card-text">Data vendita: {{ $comic->sale_date }}</p>
                    <p class="card-text"> Prezzo:{{ $comic->price }}</p>
                </div>
            </div>
    </section>
@endsection
