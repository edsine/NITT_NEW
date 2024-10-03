<?php

namespace App\Http\Controllers;

use App\Exports\MallamAminuAirportExport;
use App\Models\MallamAminuAirport;
use Illuminate\Http\Request;
use App\Imports\MallamAminuAirportImport;
use Maatwebsite\Excel\Facades\Excel;

class MallamAminuAirportController extends Controller
{
    function mallam(){

        $mallams = MallamAminuAirport::all();
  
        return view ('mallam', compact('mallams'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MallamAminuAirport::create($request->all());
      return redirect()->route('mallam');
  }
  
  public function update(Request $request, $id)
  {
    $mallam = MallamAminuAirport::findOrFail($id);
    $mallam->update($request->all());
      return redirect()->route('mallam');
  }
  
  public function destroy($id)
  {
    MallamAminuAirport::destroy($id);
      return redirect()->route('mallam');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MallamAminuAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MallamAminuAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
