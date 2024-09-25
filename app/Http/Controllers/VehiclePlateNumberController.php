<?php

namespace App\Http\Controllers;

use App\Models\VehiclePlateNumber;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\VehiclePlateNumberImport;
use App\Exports\VehiclePlateNumberExport;

class VehiclePlateNumberController extends Controller
{
    


    function vehiclePlate(){

        $vehiclePlates = VehiclePlateNumber::all();
  
        return view ('vehiclePlate', compact('vehiclePlates'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    VehiclePlateNumber::create($request->all());
      return redirect()->route('vehiclePlate');
  }
  
  public function update(Request $request, $id)
  {
      $vehiclePlates = VehiclePlateNumber::findOrFail($id);
      $vehiclePlates->update($request->all());
      return redirect()->route('vehiclePlate');
  }
  
  public function destroy($id)
  {
    VehiclePlateNumber::destroy($id);
      return redirect()->route('vehiclePlate');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new VehiclePlateNumberImport, $request->file('file'));
        return back()->with('success', 'Gross Billions imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing Gross Billions: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new VehiclePlateNumberExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}



  
  }


