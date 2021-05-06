@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Images</h2>
        <a class="btn my-5 btn-success btn-sm text-white" href="/images/create">Create</a>
        <div class="row border-bottom">
            <div class="col">
                <h3>#</h3>
            </div>
            <div class="col">
                <h3>Lien</h3>
            </div>
            <div class="col">
                <h3>Description</h3>
            </div>
            <div class="col">
                <h3>Actions</h3>
            </div>
        </div>

        @foreach ($images as $image)
        <div class="row border-bottom">
            <div class="col">
                <p>{{ $image->id }}</p>
            </div>
            <div class="col">
                <p>{{ $image->image }}</p>
            </div>
            <div class="col">
                <p>{{ $image->description }}</p>
            </div>
            <div class="col d-flex">
                <form action="/images/{{ $image->id }}/destroy" method="post">
                    @csrf
                    <a class="text-white btn btn-primary btn-sm" href="/images/{{ $image->id }}/edit">Edit</a>
                    <button class="text-white btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection