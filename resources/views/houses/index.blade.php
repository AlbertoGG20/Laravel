@extends('houses.layout')

@section('content')
    <h1>Listado de las casa</h1>

    <table>
      <thead>
        <tr>
          <th>Dirección</th>
          <th>Ciudad</th>
          <th>Metros</th>
          <th>Habitaciones</th>
          <th>Baños</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($houses as $house)
          <tr>
            <td>{{ $house->address }}</td>
            <td>{{ $house->city }}</td>
            <td>{{ $house->meters }}</td>
            <td>{{ $house->rooms }}</td>
            <td>{{ $house->bathrooms }}</td>
            <td class="table__buttons">
              <form action="{{ route('houses.destroy',$house->id) }}" method="POST">
              <a href="{{ route('houses.edit',$house->id)}}" class="btn btn--edit">Editar</a>
              
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn btn--delete">Eliminar</button>
            </form>
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>

    @endsection