@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Bibliothèques</h2>
        <a class="btn my-5 btn-success btn-sm text-white" href="/bibliotheques/create">Create</a>
        <div class="row border-bottom">
            <div class="col">
                <h3>#</h3>
            </div>
            <div class="col">
                <h3>Nom</h3>
            </div>
            <div class="col">
                <h3>adresse</h3>
            </div>
            <div class="col">
                <h3>Numéro de téléphone</h3>
            </div>
            <div class="col">
                <h3>Actions</h3>
            </div>
        </div>

        @foreach ($bibliotheques as $bibliotheque)
        <div class="row border-bottom">
            <div class="col">
                <p>{{ $bibliotheque->id }}</p>
            </div>
            <div class="col">
                <p>{{ $bibliotheque->nom }}</p>
            </div>
            <div class="col">
                <p>{{ $bibliotheque->adresse }}</p>
            </div>
            <div class="col">
                <p>{{ $bibliotheque->numTel }}</p>
            </div>
            <div class="col d-flex">
                <form action="/bibliotheques/{{ $bibliotheque->id }}/destroy" method="post">
                    @csrf
                    <a class="text-white btn btn-primary btn-sm" href="/bibliotheques/{{ $bibliotheque->id }}/edit">Edit</a>
                    <button class="text-white btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection