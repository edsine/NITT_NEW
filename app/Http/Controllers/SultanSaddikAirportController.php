<?php

namespace App\Http\Controllers;

use App\Models\SultanSaddikAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SultanSaddikAirportImport;
use App\Exports\SultanSaddikAirportExport;

class SultanSaddikAirportController extends Controller
{
   
    function sultan(){

        $sultans = SultanSaddikAirport::all();
  
        return view ('sultan', compact('sultans'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    SultanSaddikAirport::create($request->all());
      return redirect()->route('sultan');
  }
  
  public function update(Request $request, $id)
  {
    $sultan = SultanSaddikAirport::findOrFail($id);
    $sultan->update($request->all());
      return redirect()->route('sultan');
  }
  
  public function destroy($id)
  {
    SultanSaddikAirport::destroy($id);
      return redirect()->route('sultan');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new SultanSaddikAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new SultanSaddikAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
