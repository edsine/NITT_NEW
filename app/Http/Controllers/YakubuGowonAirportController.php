<?php

namespace App\Http\Controllers;

use App\Models\YakubuGowonAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\YakubuGowonAirportExport;
use App\Imports\YakubuGowonAirportImport;

class YakubuGowonAirportController extends Controller
{
    
    function yakubu(){

        $yakubus = YakubuGowonAirport::all();
  
        return view ('yakubu', compact('yakubus'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    YakubuGowonAirport::create($request->all());
      return redirect()->route('yakubu');
  }
  
  public function update(Request $request, $id)
  {
    $yakubu = YakubuGowonAirport::findOrFail($id);
    $yakubu->update($request->all());
      return redirect()->route('yakubu');
  }
  
  public function destroy($id)
  {
    YakubuGowonAirport::destroy($id);
      return redirect()->route('yakubu');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new YakubuGowonAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new YakubuGowonAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
