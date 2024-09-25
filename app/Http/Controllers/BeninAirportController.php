<?php

namespace App\Http\Controllers;

use App\Models\BeninAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BeninAirportExport;
use App\Imports\BeninAirportImport;

class BeninAirportController extends Controller
{
    function benin(){

        $benins = BeninAirport::all();
  
        return view ('benin', compact('benins'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    BeninAirport::create($request->all());
      return redirect()->route('benin');
  }
  
  public function update(Request $request, $id)
  {
    $benin = BeninAirport::findOrFail($id);
    $benin->update($request->all());
      return redirect()->route('benin');
  }
  
  public function destroy($id)
  {
    BeninAirport::destroy($id);
      return redirect()->route('benin');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new BeninAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new BeninAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

}
