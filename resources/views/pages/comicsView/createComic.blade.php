@extends('layouts.app')

@section('title', 'DC Comics | Add New Comic')
@section('content')
<main>

    <h2 class="text-center m-2">Add a New Comic to the List</h2>
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                {{-- @error('title') is-invalid @enderror --}}

            />
            {{-- @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image URL</label>
            <input
                type="text"
                class="form-control"
                name="thumb"
                id="thumb"
            />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="text"
                class="form-control"
                name="price"
                id="price"
            />
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input
                type="text"
                class="form-control"
                name="series"
                id="series"
            />
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date of sale</label>
            <input
                type="date"
                class="form-control"
                name="sale_date"
                id="sale_date"
            />
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input
                type="text"
                class="form-control"
                name="type"
                id="type"
            />
        </div>
      <button type="submit" class="btn btn-primary">Add New Comic</button>
    </form>
</div>

</main>
@endsection
