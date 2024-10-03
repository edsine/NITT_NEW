<?php

namespace App\Http\Controllers;

use App\Models\MinnaAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MinnaAirportImport;
use App\Exports\MinnaAirportExport;

class MinnaAirportController extends Controller
{
    function minna(){

        $minnas = MinnaAirport::all();
  
        return view ('minna', compact('minnas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MinnaAirport::create($request->all());
      return redirect()->route('minna');
  }
  
  public function update(Request $request, $id)
  {
    $minna = MinnaAirport::findOrFail($id);
    $minna->update($request->all());
      return redirect()->route('minna');
  }
  
  public function destroy($id)
  {
    MinnaAirport::destroy($id);
      return redirect()->route('minna');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MinnaAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MinnaAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
