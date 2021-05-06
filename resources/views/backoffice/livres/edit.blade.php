@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/livres/{{ $livre->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titre :</label>
                <input type="text" class="form-control" name="titre" value={{ $livre->titre }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse :</label>
                <input type="text" class="form-control" name="auteur" value={{ $livre->auteur }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="date" value={{ $livre->date }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="nbPages" value={{ $livre->nbPages }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="mobile" value={{ $livre->mobile }}>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection