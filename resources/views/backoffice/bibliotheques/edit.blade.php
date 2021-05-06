@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/bibliotheques/{{ $bibliotheque->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" value={{ $bibliotheque->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse :</label>
                <input type="text" class="form-control" name="adresse" value={{ $bibliotheque->adresse }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="numTel" value={{ $bibliotheque->numTel }}>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection