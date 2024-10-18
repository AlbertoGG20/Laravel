<head>
  <link rel="stylesheet" href="/css/show.css">
</head>

@extends('houses.layout')

  
@section('content')

<main>
  <h1 class="card-header">Información sobre las casas </h1>
  <div class="house">
    <img class="house__img" src="/img/houses/house1.jpg" alt="">
    <p class="house__address"> <i class="fa-solid fa-location-dot"></i> {{ $house->address }}, <span> {{ $house->city }}</span> </p>
    <div class="house__info">

      <p><i class="fa-solid fa-ruler-combined"></i> {{ $house->meters}}</p>
      
      <p><i class="fa-solid fa-bed"></i> {{ $house->rooms}}</p>
      
      <p><i class="fa-solid fa-bath"></i> {{ $house->bathrooms}}</p>
    
    </div>
  </div>

  </main>



@endsection