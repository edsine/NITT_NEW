<?php

namespace App\Http\Controllers;

use App\Models\MaiduguriAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MaiduguriAirportExport;
use App\Imports\MaiduguriAirportImport;

class MaiduguriAirportController extends Controller
{
    function maiduguri(){

        $maiduguris = MaiduguriAirport::all();
  
        return view ('maiduguri', compact('maiduguris'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MaiduguriAirport::create($request->all());
      return redirect()->route('mallam');
  }
  
  public function update(Request $request, $id)
  {
    $maiduguri = MaiduguriAirport::findOrFail($id);
    $maiduguri->update($request->all());
      return redirect()->route('maiduguri');
  }
  
  public function destroy($id)
  {
    MaiduguriAirport::destroy($id);
      return redirect()->route('maiduguri');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MaiduguriAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MaiduguriAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
