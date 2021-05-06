@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/users/{{ $user->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" value={{ $user->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom :</label>
                <input type="text" class="form-control" name="prenom" value={{ $user->prenom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Age:</label>
                <input type="text" class="form-control" name="age" value={{ $user->age }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" class="form-control" name="email" value={{ $user->email }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Password :</label>
                <input type="text" class="form-control" name="password" value={{ $user->password }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Password :</label>
                <input type="text" class="form-control" name="image" value={{ $user->image }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection