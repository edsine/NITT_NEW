<?php

namespace App\Http\Controllers;

use App\Models\MakurdiAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MakurdiAirportImport;
use App\Exports\MakurdiAirportExport;

class MakurdiAirportController extends Controller
{
    function makurdi(){

        $makurdis = MakurdiAirport::all();
  
        return view ('makurdi', compact('makurdis'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MakurdiAirport::create($request->all());
      return redirect()->route('makurdi');
  }
  
  public function update(Request $request, $id)
  {
    $makurdi = MakurdiAirport::findOrFail($id);
    $makurdi->update($request->all());
      return redirect()->route('makurdi');
  }
  
  public function destroy($id)
  {
    MakurdiAirport::destroy($id);
      return redirect()->route('makurdi');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MakurdiAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MakurdiAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
