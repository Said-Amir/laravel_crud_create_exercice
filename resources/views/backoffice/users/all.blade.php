@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Users</h2>
        <a class="btn my-5 btn-success btn-sm text-white" href="/users/create">Create</a>
        <div class="row border-bottom">
            <div class="col">
                <h3>#</h3>
            </div>
            <div class="col">
                <h3>Nom</h3>
            </div>
            <div class="col">
                <h3>Prenom</h3>
            </div>
            <div class="col">
                <h3>Age</h3>
            </div>
            <div class="col">
                <h3>E-mail</h3>
            </div>
            <div class="col">
                <h3>Password</h3>
            </div>
            <div class="col">
                <h3>Image</h3>
            </div>
            <div class="col">
                <h3>Actions</h3>
            </div>
        </div>

        @foreach ($users as $user)
        <div class="row border-bottom">
            <div class="col">
                <p>{{ $user->id }}</p>
            </div>
            <div class="col">
                <p>{{ $user->nom }}</p>
            </div>
            <div class="col">
                <p>{{ $user->prenom }}</p>
            </div>
            <div class="col">
                <p>{{ $user->age }}</p>
            </div>
            <div class="col overflow-hidden">
                <p>{{ $user->email }}</p>
            </div>
            <div class="col overflow-hidden">
                <p>{{ $user->password }}</p>
            </div>
            <div class="col overflow-hidden">
                <p>{{ $user->image }}</p>
            </div>
            <div class="col d-flex">
                <form action="/users/{{ $user->id }}/destroy" method="post">
                    @csrf
                    <a class="text-white btn btn-primary btn-sm" href="/users/{{ $user->id }}/edit">Edit</a>
                    <button class="text-white btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection