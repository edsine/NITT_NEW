<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirPassengersTraffic;


class AirTrafficDataController extends Controller
{
    public function airTraffic()
    {
        return view('airTraffic');
    }

    public function store(Request $request)
    {
        AirPassengersTraffic::create($request->all());
        return redirect()->route('traffics');
    }
    
    public function update(Request $request, $id)
    {
        $traffic = AirPassengersTraffic::findOrFail($id);
        $traffic->update($request->all());
        return redirect()->route('traffics');
    }
    
    public function destroy($id)
    {
        AirPassengersTraffic::destroy($id);
        return redirect()->route('traffics');
    }
    
    function traffics(){
    
        $traffics = AirPassengersTraffic::all();
    
        return view ('airTraffic', compact('traffics'));
        
    
        }




        public function loadGraphPage(){

            $AirPassengersTraffic_data = AirPassengersTraffic::all();
        
            $labels = [];
            $data = [];
        
            foreach ( $AirPassengersTraffic_data as $value){
                $labels[] = $value[''];
                $data[] = $value[''];
            }
        
            return view('graphPage')
            ->with('labels', $labels)
            ->with('data', $data);
        }



}
