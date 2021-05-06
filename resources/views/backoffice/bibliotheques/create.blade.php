@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/bibliotheques/store" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse :</label>
                <input type="text" class="form-control" name="adresse">
            </div>
            <div class="mb-3">
                <label class="form-label">Numéro de telephone :</label>
                <input type="text" class="form-control" name="numTel">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection