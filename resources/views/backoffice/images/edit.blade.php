@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/images/{{ $image->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Lien :</label>
                <input type="text" class="form-control" name="image" value={{ $image->image }}>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="description" cols="30" rows="10">{{ $image->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection