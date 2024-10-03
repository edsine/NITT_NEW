<?php

namespace App\Http\Controllers;

use App\Models\KatsinaAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KatsinaAirportImport;
use App\Exports\KatsinaAirportExport;

class KatsinaAirportController extends Controller
{
    function katsina(){

        $katsinas = KatsinaAirport::all();
  
        return view ('katsina', compact('katsinas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    KatsinaAirport::create($request->all());
      return redirect()->route('katsina');
  }
  
  public function update(Request $request, $id)
  {
    $katsina = KatsinaAirport::findOrFail($id);
    $katsina->update($request->all());
      return redirect()->route('katsina');
  }
  
  public function destroy($id)
  {
    KatsinaAirport::destroy($id);
      return redirect()->route('katsina');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new KatsinaAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new KatsinaAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
