<?php

namespace App\Http\Controllers;

use App\Models\SamMbakweAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SamMbakweAirportExport;
use App\Imports\SamMbakweAirportImport;

class SamMbakweAirportController extends Controller
{
    function samMbakwe(){

        $samMbakwes = SamMbakweAirport::all();
  
        return view ('sam', compact('samMbakwes'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    SamMbakweAirport::create($request->all());
      return redirect()->route('sam');
  }
  
  public function update(Request $request, $id)
  {
    $samMbakwe = SamMbakweAirport::findOrFail($id);
    $samMbakwe->update($request->all());
      return redirect()->route('sam');
  }
  
  public function destroy($id)
  {
    SamMbakweAirport::destroy($id);
      return redirect()->route('sam');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new SamMbakweAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new SamMbakweAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
