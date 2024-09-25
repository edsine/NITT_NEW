<?php

namespace App\Http\Controllers;

use App\Models\IbadanAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\IbadanAirportExport;
use App\Imports\IbadanAirportImport;

class IbadanAirportController extends Controller
{
    function ibadan(){

        $ibadans = IbadanAirport::all();
  
        return view ('ibadan', compact('ibadans'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    IbadanAirport::create($request->all());
      return redirect()->route('ibadan');
  }
  
  public function update(Request $request, $id)
  {
    $Ibadan = IbadanAirport::findOrFail($id);
    $Ibadan->update($request->all());
      return redirect()->route('ibadan');
  }
  
  public function destroy($id)
  {
    IbadanAirport::destroy($id);
      return redirect()->route('ibadan');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new IbadanAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new IbadanAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

}
