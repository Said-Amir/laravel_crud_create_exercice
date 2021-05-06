@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Livres</h2>
        <a class="btn my-5 btn-success btn-sm text-white" href="/livres/create">Create</a>
        <div class="row border-bottom">
            <div class="col">
                <h3>#</h3>
            </div>
            <div class="col">
                <h3>Titre</h3>
            </div>
            <div class="col">
                <h3>Auteur</h3>
            </div>
            <div class="col">
                <h3>Date de publication</h3>
            </div>
            <div class="col">
                <h3>Nombre de pages</h3>
            </div>
            <div class="col">
                <h3>Version mobile</h3>
            </div>
            <div class="col">
                <h3>Actions</h3>
            </div>
        </div>

        @foreach ($livres as $livre)
        <div class="row border-bottom">
            <div class="col">
                <p>{{ $livre->id }}</p>
            </div>
            <div class="col">
                <p>{{ $livre->titre }}</p>
            </div>
            <div class="col">
                <p>{{ $livre->auteur }}</p>
            </div>
            <div class="col">
                <p>{{ $livre->date }}</p>
            </div>
            <div class="col">
                <p>{{ $livre->nbPages }}</p>
            </div>
            <div class="col">
                <p>{{ $livre->mobile === 1 ? "Oui" : "Non" }}</p>
            </div>
            <div class="col d-flex">
                <form action="/livres/{{ $livre->id }}/destroy" method="post">
                    @csrf
                    <a class="text-white btn btn-primary btn-sm" href="/livres/{{ $livre->id }}/edit">Edit</a>
                    <button class="text-white btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection