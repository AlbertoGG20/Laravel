<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <title>In - mobiliaria</title>

        <link rel="stylesheet" href="/css/welcome.css">

    </head>
    <body>
      @extends('houses.layout')
      @section('content')
      <div class="home__hero">
        <h1>In - Mobiliaria</h1>
        <p>Tu inmobiliaria de confianza en la Isla</p>
      </div>
      <div class="card-houses__container">
        @foreach ($houses as $house)
        <a href="{{ route('houses.show',$house->id)}}" class="card-house">
          <h3>{{ $house->address }}</h3>
          <div class="card-houses__info">
            <p>{{ $house->city }}</p>
            <p>{{ $house->meters}}</p>
          </div>
        </a>
        @endforeach
      </div>
    </body>
    @endsection

 
</html>
