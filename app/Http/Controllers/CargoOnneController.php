<?php

namespace App\Http\Controllers;

use App\Models\CargoOnne;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CargoOnneImport;
use App\Exports\CargoOnneExport;

class CargoOnneController extends Controller
{
    function CargoOnne(){

        $cargoOnnes = CargoOnne::all();
  
        return view ('cargoOnne', compact('cargoOnnes'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoOnne::create($request->all());
      return redirect()->route('cargoOnne');
  }
  
  public function update(Request $request, $id)
  {
      $cargoNigeria = CargoOnne::findOrFail($id);
      $cargoNigeria->update($request->all());
      return redirect()->route('cargoOnne');
  }
  
  public function destroy($id)
  {
    CargoOnne::destroy($id);
      return redirect()->route('cargoOnne');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoOnneImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoOnneExport, 'CargoOnne.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
