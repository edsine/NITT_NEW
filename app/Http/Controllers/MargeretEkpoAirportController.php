<?php

namespace App\Http\Controllers;

use App\Models\MargeretEkpoAirport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MargeretEkpoAirportImport;
use App\Exports\MargeretEkpoAirportExport;

class MargeretEkpoAirportController extends Controller
{
    function margeret(){

        $margerets = MargeretEkpoAirport::all();
  
        return view ('margeret', compact('margerets'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MargeretEkpoAirport::create($request->all());
      return redirect()->route('margeret');
  }
  
  public function update(Request $request, $id)
  {
    $margeret = MargeretEkpoAirport::findOrFail($id);
    $margeret->update($request->all());
      return redirect()->route('margeret');
  }
  
  public function destroy($id)
  {
    MargeretEkpoAirport::destroy($id);
      return redirect()->route('margeret');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MargeretEkpoAirportImport, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MargeretEkpoAirportExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}

}
