<?php

namespace App\Http\Controllers;

use App\Models\AkanuIbiamAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AkanuIbiamAirportExport;
use App\Imports\AkanuIbiamAirportImport;

class AkanuIbiamAirportController extends Controller
{
    function akanuIbiam(){

        $akanuIbiams = AkanuIbiamAirport::all();
  
        return view ('akanuIbiam', compact('akanuIbiams'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    AkanuIbiamAirport::create($request->all());
      return redirect()->route('akanuIbiam');
  }
  
  public function update(Request $request, $id)
  {
    $akanuIbiam = AkanuIbiamAirport::findOrFail($id);
    $akanuIbiam->update($request->all());
      return redirect()->route('akanuIbiam');
  }
  
  public function destroy($id)
  {
    AkanuIbiamAirport::destroy($id);
      return redirect()->route('akanuIbiam');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new AkanuIbiamAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new AkanuIbiamAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

}
