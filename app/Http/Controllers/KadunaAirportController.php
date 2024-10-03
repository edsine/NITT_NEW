<?php

namespace App\Http\Controllers;

use App\Models\KadunaAirport;
use Illuminate\Http\Request;
use App\Exports\KadunaAirportExport;
use App\Imports\KadunaAirportImport;
use Maatwebsite\Excel\Facades\Excel;

class KadunaAirportController extends Controller
{
    
    function kaduna(){

        $kadunas = KadunaAirport::all();
  
        return view ('kaduna', compact('kadunas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    KadunaAirport::create($request->all());
      return redirect()->route('kaduna');
  }
  
  public function update(Request $request, $id)
  {
    $ilorin = KadunaAirport::findOrFail($id);
    $ilorin->update($request->all());
      return redirect()->route('kaduna');
  }
  
  public function destroy($id)
  {
    KadunaAirport::destroy($id);
      return redirect()->route('kaduna');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new KadunaAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new KadunaAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
