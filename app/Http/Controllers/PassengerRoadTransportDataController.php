<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PassengerRoadTransportData;

class PassengerRoadTransportDataController extends Controller
{
    public function passengerRoad()
    {
        return view('passengerRoad');
    }
    

    public function store(Request $request)
    {
        passengerRoadTransportData::create($request->all());
        return redirect()->route('passengers');
    }
    
    public function update(Request $request, $id)
    {
        $passenger = passengerRoadTransportData::findOrFail($id);
        $passenger->update($request->all());
        return redirect()->route('passengers');
    }
    
    public function destroy($id)
    {
        passengerRoadTransportData::destroy($id);
        return redirect()->route('passengers');
    }
    
    function passengers(){
    
        $passengers = passengerRoadTransportData::all();
    
        return view ('passengerRoad', compact('passengers'));
        
    
        }




}
