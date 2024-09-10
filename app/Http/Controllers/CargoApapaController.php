<?php

namespace App\Http\Controllers;

use App\Models\CargoApapa;
use Illuminate\Http\Request;
use App\Exports\CargoApapaExport;
use App\Imports\CargoApapaImport;
use Maatwebsite\Excel\Facades\Excel;

class CargoApapaController extends Controller
{
    function cargoApapas(){

        $cargoApapas = CargoApapa::all();
  
        return view ('cargoApapa', compact('cargoApapas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoApapa::create($request->all());
      return redirect()->route('cargoApapa');
  }
  
  public function update(Request $request, $id)
  {
      $nationalShips = CargoApapa::findOrFail($id);
      $nationalShips->update($request->all());
      return redirect()->route('cargoApapa');
  }
  
  public function destroy($id)
  {
    CargoApapa::destroy($id);
      return redirect()->route('cargoApapa');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoApapaImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoApapaExport, 'CargoApapa.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
