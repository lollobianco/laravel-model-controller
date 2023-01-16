@extends('layouts.app')
@section('page-title', "Home Movies")

@section('main')

    <div class="d-flex flex-wrap justify-content-center px-5">

    @foreach ($all_movies as $element)

        <div class="card col-4 m-2 p-2 text-center bg-secondary">
            <h5 class="text-warning">{{$element->title}}</h5>
            <h6 class="text-white">Titolo Originale: {{$element->original_title}}</h6>
            <h6 class="text-white">Nazionalità: {{$element->nationality}}</h6>
            <h6 class="text-white">Data di Uscita: {{$element->date}}</h6>
            <h6 class="text-white">Voto: {{$element->vote}}</h6>
        </div>

    @endforeach

    </div>

@endsection
