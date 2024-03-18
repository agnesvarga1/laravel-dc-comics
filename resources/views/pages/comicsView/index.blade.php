@extends('layouts.app')

@section('title', 'DC Comics | Comics')
@section('content')
<main>
 <h1 class="text-primary text-center"> Comic List</h1>
 <div class="container">
  <a href="">  <button class="btn btn-primary my-5">ADD COMIC</button></a>
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
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td class="d-flex "><button class="btn btn-warning p-1  m-1 ">Edit</button>
                    <button class="btn btn-danger p-1 m-1">Delete</button>
                </td>
            </tr>
            @endforeach


        </tbody>
      </table>
 </div>


</main>
@endsection
