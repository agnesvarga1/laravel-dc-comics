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
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td class="d-flex "><a href="{{route('comics.edit',$comic->id)}}"><button class="btn btn-warning p-1  m-1 ">Edit</button></a>
                    <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                        @csrf
                        @method("Delete")
                        <button type="submit" class="btn btn-danger p-1 m-1">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach


        </tbody>
      </table>
 </div>


</main>
@endsection
