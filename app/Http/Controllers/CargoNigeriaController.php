<?php

namespace App\Http\Controllers;

use App\Models\CargoNigeria;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CargoNigeriaExport;
use App\Imports\CargoNigeriaImport;

class CargoNigeriaController extends Controller
{
    function CargoNigeria(){

        $cargoNigerias = CargoNigeria::all();
  
        return view ('cargoNigeria', compact('cargoNigerias'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoNigeria::create($request->all());
      return redirect()->route('cargoNigeria');
  }
  
  public function update(Request $request, $id)
  {
      $cargoNigeria = CargoNigeria::findOrFail($id);
      $cargoNigeria->update($request->all());
      return redirect()->route('cargoNigeria');
  }
  
  public function destroy($id)
  {
    CargoNigeria::destroy($id);
      return redirect()->route('cargoNigeria');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoNigeriaImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoNigeriaExport, 'cargoNigeria.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
