
@extends('houses.layout')

@section('content')
{{-- REVISAR LA PARTE DE ARRIBA --}}
<div class="card mt-5">
  <h2 class="card-header">Edit Product</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('houses.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form class=" form" action="{{ route('houses.update',$house->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" name="address" id="address" class="form-control" value="{{ $house->address }}" placeholder="Dirección del piso">
      </div>

      <div class="form-group">
        <label for="city">Ciudad</label>
        <input type="text" name="city" id="city" class="form-control" value="{{ $house->city }}" placeholder="Ciudad del piso">
    </div>

    <div class="form__sub-group">
      <div class="form-group">
          <label for="meters">Metros</label>
          <input type="number" name="meters" id="meters" class="form-control"  value="{{ $house->meters}}" placeholder="Nº Metros">
      </div>

      <div class="form-group">
        <label for="rooms">Habitaciones</label>
        <input type="number" name="rooms" id="rooms" class="form-control" value="{{ $house->rooms}}" placeholder=" Nº Habitaciones">
    </div>

    <div class="form-group">
      <label for="bathrooms">Baños</label>
      <input type="number" name="bathrooms" id="bathrooms" class="form-control" value="{{ $house->bathrooms}}"  placeholder="NºBaños ">
  </div>
</div>

        <button type="submit" class="form__btn form__btn--update">Actualizar</button>
    </form>

  </div>
</div>
@endsection