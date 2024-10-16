@extends('houses.layout')
  
@section('content')

  <h2 class="card-header">Casa</h2>

  
    <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Name:</strong> <br/>
                {{ $house->name }}
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Details:</strong> <br/>
                {{ $house->detail }}
            </div>
        </div>
    </div>

@endsection