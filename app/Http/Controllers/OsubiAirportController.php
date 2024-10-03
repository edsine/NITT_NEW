<?php

namespace App\Http\Controllers;

use App\Models\OsubiAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OsubiAirportImport;
use App\Exports\OsubiAirportExport;


class OsubiAirportController extends Controller
{
    function osubi(){

        $osubis = OsubiAirport::all();
  
        return view ('osubi', compact('osubis'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    OsubiAirport::create($request->all());
      return redirect()->route('osubi');
  }
  
  public function update(Request $request, $id)
  {
    $sultan = OsubiAirport::findOrFail($id);
    $sultan->update($request->all());
      return redirect()->route('osubi');
  }
  
  public function destroy($id)
  {
    OsubiAirport::destroy($id);
      return redirect()->route('osubi');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new OsubiAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new OsubiAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
