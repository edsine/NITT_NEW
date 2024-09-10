<?php

namespace App\Http\Controllers;

use App\Models\CargoDelta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CargoDeltaExport;
use App\Imports\CargoDeltaImport;

class CargoDeltaController extends Controller
{
    function CargoDelta(){

        $cargoDeltas = CargoDelta::all();
  
        return view ('cargoDelta', compact('cargoDeltas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoDelta::create($request->all());
      return redirect()->route('cargoDelta');
  }
  
  public function update(Request $request, $id)
  {
      $cargoDelta = CargoDelta::findOrFail($id);
      $cargoDelta->update($request->all());
      return redirect()->route('cargoDelta');
  }
  
  public function destroy($id)
  {
    CargoDelta::destroy($id);
      return redirect()->route('cargoDelta');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoDeltaImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoDeltaExport, 'CargoDelta.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
