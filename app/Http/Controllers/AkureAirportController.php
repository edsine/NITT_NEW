<?php

namespace App\Http\Controllers;

use App\Models\AkureAirport;
use Illuminate\Http\Request;
use App\Imports\AkureAirportImport;
use App\Exports\AkureAirportExport;
use Maatwebsite\Excel\Facades\Excel;

class AkureAirportController extends Controller
{
    function akure(){

        $akures = AkureAirport::all();
  
        return view ('akure', compact('akures'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    AkureAirport::create($request->all());
      return redirect()->route('akure');
  }
  
  public function update(Request $request, $id)
  {
    $akure = AkureAirport::findOrFail($id);
    $akure->update($request->all());
      return redirect()->route('akure');
  }
  
  public function destroy($id)
  {
    AkureAirport::destroy($id);
      return redirect()->route('akure');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new AkureAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new AkureAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

}
