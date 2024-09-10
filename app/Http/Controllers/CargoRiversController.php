<?php

namespace App\Http\Controllers;

use App\Models\CargoRivers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CargoRiversExport;
use App\Imports\CargoRiversImport;

class CargoRiversController extends Controller
{
    function CargoRivers(){

        $cargoRivers = CargoRivers::all();
  
        return view ('cargoRivers', compact('cargoRivers'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoRivers::create($request->all());
      return redirect()->route('cargoRivers');
  }
  
  public function update(Request $request, $id)
  {
      $cargoRivers = CargoRivers::findOrFail($id);
      $cargoRivers->update($request->all());
      return redirect()->route('cargoRivers');
  }
  
  public function destroy($id)
  {
    CargoRivers::destroy($id);
      return redirect()->route('cargoRivers');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoRiversImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoRiversExport, 'cargoRivers.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
