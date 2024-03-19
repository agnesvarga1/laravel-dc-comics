@extends('layouts.app')

@section('title', 'DC Comics | Add New Comic')
@section('content')
<main>
    {{-- https://unsplash.com/photos/the-walking-dead-comic-book-d2Py_uhXJQo --}}
    <h2 class="text-center m-2">Modify Comic</h2>
<div class="container">
    <form action="{{route('comics.update',$comic->id )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                value={{old('title') ?? $comic->title}}
            />
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">
                {{old('description') ?? $comic->description}}
                /></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image URL</label>
            <input
                type="text"
                class="form-control"
                name="thumb"
                id="thumb"
                value={{old('thumb') ?? $comic->thumb}}
            />
            />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="text"
                class="form-control"
                name="price"
                id="price"
                value={{old('price') ?? $comic->price}}
            />
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input
                type="text"
                class="form-control"
                name="series"
                id="series"
                value={{old('series') ?? $comic->series}}
            />
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date of sale</label>
            <input
                type="text"
                class="form-control"
                name="sale_date"
                id="sale_date"
                value={{old('sale_date') ?? $comic->sale_date}}
            />
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input
                type="text"
                class="form-control"
                name="type"
                id="type"
                value={!!old('type') ?? $comic->type!!}
            />
        </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</main>
@endsection
