<?php

namespace App\Http\Controllers;

use App\Models\YolaAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\YolaAirportImport;
use App\Exports\YolaAirportExport;

class YolaAirportController extends Controller
{
    function yola(){

        $yolas = YolaAirport::all();
  
        return view ('yola', compact('yolas'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    YolaAirport::create($request->all());
      return redirect()->route('yola');
  }
  
  public function update(Request $request, $id)
  {
    $yola = YolaAirport::findOrFail($id);
    $yola->update($request->all());
      return redirect()->route('yola');
  }
  
  public function destroy($id)
  {
    YolaAirport::destroy($id);
      return redirect()->route('yola');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new YolaAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new YolaAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
