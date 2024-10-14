<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\House;

class HouseController extends Controller
{
 public function index(){
    $houses = House::all();
    return view('houses.index', compact('houses'));
  }

  public function create(){
    return view('houses.create');
  }

  public function store(Request $request){
    $house = new House();
    $house->address = $request->input('address');
    $house->city = $request->input('city');
    $house->meters = $request->input('meters');
    $house->rooms = $request->input('rooms');
    $house->bathrooms = $request->input('bathrooms');
    $house->save();

    return redirect()->route('houses.index');
  }

  public function show(house $house){
    return view('houses.show', compact('house'));
  }

  public function edit(House $house) {
    return view('houses.edit', compact('house'));
}

  public function update(Request $request, house $house){
    $house->address = $request->input('address');
    $house->city = $request->input('city');
    $house->meters = $request->input('meters');
    $house->rooms = $request->input('rooms');
    $house->bathrooms = $request->input('bathrooms');
    $house->save();

    return redirect()->route('houses.index');
  }

  public function destroy(house $house){
    $house->delete();
    return redirect()->route('houses.index');
  }


}
