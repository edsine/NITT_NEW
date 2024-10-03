<?php

namespace App\Http\Controllers;

use App\Models\MurtalaMuhammedAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MurtalaMuhammedAirportImport;
use App\Exports\MurtalaMuhammedAirportExport;

class MurtalaMuhammedAirportController extends Controller
{
    function murtala(){

        $murtalas = MurtalaMuhammedAirport::all();
  
        return view ('murtala', compact('murtalas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MurtalaMuhammedAirport::create($request->all());
      return redirect()->route('murtala');
  }
  
  public function update(Request $request, $id)
  {
    $murtala = MurtalaMuhammedAirport::findOrFail($id);
    $murtala->update($request->all());
      return redirect()->route('murtala');
  }
  
  public function destroy($id)
  {
    MurtalaMuhammedAirport::destroy($id);
      return redirect()->route('murtala');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MurtalaMuhammedAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MurtalaMuhammedAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
