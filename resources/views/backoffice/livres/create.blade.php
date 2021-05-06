@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/livres/store" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titre :</label>
                <input type="text" class="form-control" name="titre">
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse :</label>
                <input type="text" class="form-control" name="auteur">
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="date">
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="nbPages">
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="mobile">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection