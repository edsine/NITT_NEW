<?php

namespace App\Http\Controllers;

use App\Models\NnamdiAzikweAirport;
use Illuminate\Http\Request;
use App\Imports\NnamdiAzikweAirportImport;
use App\Exports\NnamdiAzikweAirportExport;
use Maatwebsite\Excel\Facades\Excel;

class NnamdiAzikweAirportController extends Controller
{
        function nnamdiAzikwe(){

        $nnamdiAzikwes = NnamdiAzikweAirport::all();
  
        return view ('nnamdi', compact('nnamdiAzikwes'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    NnamdiAzikweAirport::create($request->all());
      return redirect()->route('nnamdiAzikwe');
  }
  
  public function update(Request $request, $id)
  {
    $nnamdiAzikwe = NnamdiAzikweAirport::findOrFail($id);
    $nnamdiAzikwe->update($request->all());
      return redirect()->route('nnamdiAzikwe');
  }
  
  public function destroy($id)
  {
    NnamdiAzikweAirport::destroy($id);
      return redirect()->route('nnamdiAzikwe');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new NnamdiAzikweAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new NnamdiAzikweAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}



}
