@extends('layouts.app')

@section('title', 'DC Comics | Comics')
@section('content')
<main>
 <h1 class="text-primary text-center">Read Comics</h1>
 <table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Comic Description</th>
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

            <td>{{$comic['title']}}</td>
            <td>{{$comic['description']}}</td>
            <td>{{$comic['thumb']}}</td>
            <td>{{$comic['price']}}</td>
            <td>{{$comic['series']}}</td>
            <td>{{$comic['sale_date']}}</td>
            <td>{{$comic['type']}}</td>

            {{--  <td>{{$comic->title}}</td>
           <td>{{$comic->description}}</td>
            <td>{{$comic->thumb}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td> --}}

        </tr>
        @endforeach


    </tbody>
  </table>

</main>
@endsection
