@extends('layouts.app')

@section('title', 'DC Comics | Comics')
@section('content')
<main>
 <h1 class="text-primary text-center mt-4"> Comic List</h1>
 <div class="container">
  <a href="{{route('comics.create')}}">  <button class="btn btn-primary my-5">ADD COMIC</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            {{-- <th scope="col">Comic Description</th> --}}
            <th scope="col">Cover URL</th>
            <th scope="col">Price</th>
            <th scope="col">Serie</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Comic Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic )
            <tr>

                {{-- <td>{{$comic['title']}}</td>
                <td>{{$comic['description']}}</td>
                <td>{{$comic['thumb']}}</td>
                <td>{{$comic['price']}}</td>
                <td>{{$comic['series']}}</td>
                <td>{{$comic['sale_date']}}</td>
                <td>{{$comic['type']}}</td> --}}

                <td>  <a href="{{ route('comics.show', ['comic' => $comic['id'] ] ) }}"> {{$comic->title}}</a></td>
                {{-- <td>{{$comic->description}}</td> --}}
                <td>{{$comic->thumb}}</td>
                <td>${{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td class="d-flex align-items-center justify-content-center fs-6">

                    <button type="button" class="btn btn-warning m-1">
                        <a class="text-dark" href="{{route('comics.edit',$comic->id)}}"> Edit</a>
                        </button>


                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete
                           </button>




                </td>
            </tr>
            @endforeach


        </tbody>
      </table>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h4>Are you sure want to delete this item?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
            @csrf
            @method("Delete")
            <button type="submit" class="btn btn-danger p-1 m-1">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>
 </div>


</main>
@endsection
