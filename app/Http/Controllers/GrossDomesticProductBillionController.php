<?php

namespace App\Http\Controllers;

use App\Models\GrossDomesticProductBillion;
use Illuminate\Http\Request;
use App\Imports\GrossDomesticProductBillionImport;
use App\Exports\GrossDomesticProductBillionExport;
use Maatwebsite\Excel\Facades\Excel;


class GrossDomesticProductBillionController extends Controller
{
    function grossBIllions(){

        $grossBillions = GrossDomesticProductBillion::all();
  
        return view ('grossBillions', compact('grossBillions'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    GrossDomesticProductBillion::create($request->all());
      return redirect()->route('grossBillions');
  }
  
  public function update(Request $request, $id)
  {
      $grossBIllions = GrossDomesticProductBillion::findOrFail($id);
      $grossBIllions->update($request->all());
      return redirect()->route('grossBillions');
  }
  
  public function destroy($id)
  {
    GrossDomesticProductBillion::destroy($id);
      return redirect()->route('grossBillions');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new GrossDomesticProductBillionImport, $request->file('file'));
        return back()->with('success', 'Gross Billions imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing Gross Billions: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new GrossDomesticProductBillionExport, 'grossBillions.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting Gross Billions: ' . $e->getMessage());
    }
}


public function dashboard() {
    return view('allModeDashboard'); 
}

  
  }
