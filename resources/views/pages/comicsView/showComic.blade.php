@extends('layouts.app')

@section('title', 'DC Comics | Comic Description')

@section('content')
{{-- {{dd($comic)}} --}}
    <main>
      <div class="container">
        <div class=row>
            <figure class="col-4">
                <img class="w-100" src="{{$comic->thumb}}" alt="">
            </figure>
            <div class="col-8">

        <h2>{{$comic->title}}</h2>
        <p>{{$comic->description}}</p>
        <p>{{$comic->price}}</p>
            </div>
        </div>

      </div>



    </main>
@endsection
