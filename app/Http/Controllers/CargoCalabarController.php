<?php

namespace App\Http\Controllers;

use App\Models\CargoCalabar;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CargoCalabarExport;
use App\Imports\CargoCalabarImport;

class CargoCalabarController extends Controller
{
    function CargoCalabar(){

        $cargoCalabars = CargoCalabar::all();
  
        return view ('cargoCalabar', compact('cargoCalabars'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CargoCalabar::create($request->all());
      return redirect()->route('cargoCalabar');
  }
  
  public function update(Request $request, $id)
  {
      $nationalShips = CargoCalabar::findOrFail($id);
      $nationalShips->update($request->all());
      return redirect()->route('cargoCalabar');
  }
  
  public function destroy($id)
  {
    CargoCalabar::destroy($id);
      return redirect()->route('cargoCalabar');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CargoCalabarImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CargoCalabarExport, 'calabar.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
