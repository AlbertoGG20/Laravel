<head>
  <link rel="stylesheet" href="/css/create.css">
</head>

@extends('houses.layout')

@section('content')
    <div class="hero">
      <h1>Agregar una casa</h1>
    </div>

    <form class="form form--create" method="POST" action="{{ route('houses.store')}}">
        @csrf

        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Dirección del piso">
        </div>

        <div class="form-group">
            <label for="city">Ciudad</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Ciudad del piso">
        </div>

        <div class="form__sub-group">
          <div class="form-group">
              <label for="meters">Metros</label>
              <input type="number" name="meters" id="meters" class="form-control" placeholder="Nº Metros">
          </div>

          <div class="form-group">
              <label for="rooms">Habitaciones</label>
              <input type="number" name="rooms" id="rooms" class="form-control" placeholder=" Nº Habitaciones">
          </div>
          
              <div class="form-group">
              <label for="bathrooms">Baños</label>
              <input type="number" name="bathrooms" id="bathrooms" class="form-control" placeholder="NºBaños ">
          </div>
        </div>

        <button class="form__btn btn form__btn--submit" type="submit">Crear Casa</button>
    </form>

    
@endsection