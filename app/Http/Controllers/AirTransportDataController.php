<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirTransportData;

class AirTransportDataController extends Controller
{
    public function airTransport()
    {
        return view('airTransport');
    }


    public function store(Request $request)
    {
        AirTransportData::create($request->all());
        return redirect()->route('transports');
    }
    
    public function update(Request $request, $id)
    {
        $transport = AirTransportData::findOrFail($id);
        $transport->update($request->all());
        return redirect()->route('transports');
    }
    
    public function destroy($id)
    {
        AirTransportData::destroy($id);
        return redirect()->route('transports');
    }
    
    function transports(){
    
        $transports = AirTransportData::all();
    
        return view ('airTransport', compact('transports'));
        
    
        }



        public function loadGraphPage(){

            $AirTransportData_data = AirTransportData::all();
        
            $labels = [];
            $data = [];
        
            foreach ( $AirTransportData_data as $value){
                $labels[] = $value[''];
                $data[] = $value[''];
            }
        
            return view('graphPage')
            ->with('labels', $labels)
            ->with('data', $data);
        }




}
