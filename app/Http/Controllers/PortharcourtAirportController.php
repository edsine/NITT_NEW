<?php

namespace App\Http\Controllers;

use App\Models\PortharcourtAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PortharcourtAirportImport;
use App\Exports\PortharcourtAirportExport;


class PortharcourtAirportController extends Controller
{
    function portharcourt(){

        $portharcourts = PortharcourtAirport::all();
  
        return view ('portharcourt', compact('portharcourts'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    PortharcourtAirport::create($request->all());
      return redirect()->route('portharcourt');
  }
  
  public function update(Request $request, $id)
  {
    $portharcourt = PortharcourtAirport::findOrFail($id);
    $portharcourt->update($request->all());
      return redirect()->route('portharcourt');
  }
  
  public function destroy($id)
  {
    PortharcourtAirport::destroy($id);
      return redirect()->route('portharcourt');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new PortharcourtAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new PortharcourtAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
