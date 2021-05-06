@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/users/create" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom :</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">Age:</label>
                <input type="text" class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password :</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Password :</label>
                <input type="text" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection