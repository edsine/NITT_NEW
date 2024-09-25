<?php

namespace App\Http\Controllers;

use App\Models\ReprintVehicleAndMotorcycle;
use Illuminate\Http\Request;
use App\Imports\ReprintVehicleAndMotorcycleImport;
use App\Exports\ReprintVehicleAndMotorcycleExport;
use Maatwebsite\Excel\Facades\Excel;


class ReprintVehicleAndMotorcycleController extends Controller
{
    

    function reprint(){

        $reprints = ReprintVehicleAndMotorcycle::all();
  
        return view ('reprint', compact('reprints'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    ReprintVehicleAndMotorcycle::create($request->all());
      return redirect()->route('reprint');
  }
  
  public function update(Request $request, $id)
  {
      $reprints = ReprintVehicleAndMotorcycle::findOrFail($id);
      $reprints->update($request->all());
      return redirect()->route('reprint');
  }
  
  public function destroy($id)
  {
    ReprintVehicleAndMotorcycle::destroy($id);
      return redirect()->route('reprint');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new ReprintVehicleAndMotorcycleImport, $request->file('file'));
        return back()->with('success', 'Gross Billions imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing Gross Billions: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new ReprintVehicleAndMotorcycleExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}




  
  }


