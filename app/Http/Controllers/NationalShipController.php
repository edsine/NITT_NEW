<?php

namespace App\Http\Controllers;

use App\Models\NationalShip;
use Illuminate\Http\Request;
use App\Exports\NationalShipExport;
use App\Imports\NationalShipImport;
use Maatwebsite\Excel\Facades\Excel;

class NationalShipController extends Controller
{
   
    function nationalShips(){

        $nationalShips = NationalShip::all();
  
        return view ('nationalShip', compact('nationalShips'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    NationalShip::create($request->all());
      return redirect()->route('nationalShips');
  }
  
  public function update(Request $request, $id)
  {
      $nationalShips = NationalShip::findOrFail($id);
      $nationalShips->update($request->all());
      return redirect()->route('nationalShips');
  }
  
  public function destroy($id)
  {
    NationalShip::destroy($id);
      return redirect()->route('nationalShips');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new NationalShipImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new NationalShipExport, 'NationalShip.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

public function dashboard() {
    return view('maritimeModeDashboard'); 
}

}
