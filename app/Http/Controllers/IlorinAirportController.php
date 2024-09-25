<?php

namespace App\Http\Controllers;

use App\Models\IlorinAirport;
use Illuminate\Http\Request;
use App\Exports\IlorinAirportExport;
use App\Imports\IlorinAirportImport;
use Maatwebsite\Excel\Facades\Excel;

class IlorinAirportController extends Controller
{
    function ilorin(){

        $ilorins = IlorinAirport::all();
  
        return view ('ilorin', compact('ilorins'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    IlorinAirport::create($request->all());
      return redirect()->route('ilorin');
  }
  
  public function update(Request $request, $id)
  {
    $ilorin = IlorinAirport::findOrFail($id);
    $ilorin->update($request->all());
      return redirect()->route('ilorin');
  }
  
  public function destroy($id)
  {
    IlorinAirport::destroy($id);
      return redirect()->route('ilorin');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new IlorinAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new IlorinAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

}
