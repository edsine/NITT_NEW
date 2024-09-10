<?php

namespace App\Http\Controllers;

use App\Models\CargoTincan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CargoTincanExport;
use App\Imports\CargoTincanImport;

class CargoTincanController extends Controller
{
    function CargoTincans(){

        $cargoTincans = CargoTincan::all();
  
        return view ('cargoTincans', compact('cargoTincans'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoTincan::create($request->all());
      return redirect()->route('cargoTincan');
  }
  
  public function update(Request $request, $id)
  {
      $cargoNigeria = CargoTincan::findOrFail($id);
      $cargoNigeria->update($request->all());
      return redirect()->route('cargoTincan');
  }
  
  public function destroy($id)
  {
    CargoTincan::destroy($id);
      return redirect()->route('cargoTincan');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoTincanImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoTincanExport, 'cargoTincans.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
