<?php

namespace App\Http\Controllers;

use App\Models\GrossDomesticProductPercent;
use Illuminate\Http\Request;
use App\Imports\GrossDomesticProductPercentImport;
use App\Exports\GrossDomesticProductPercentExport;
use Maatwebsite\Excel\Facades\Excel;

class GrossDomesticProductPercentController extends Controller
{
    function grossPercents(){

        $grossPercents = GrossDomesticProductPercent::all();
  
        return view ('grossPercents', compact('grossPercents'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    GrossDomesticProductPercent::create($request->all());
      return redirect()->route('grossPercents');
  }
  
  public function update(Request $request, $id)
  {
      $grossPercents = GrossDomesticProductPercent::findOrFail($id);
      $grossPercents->update($request->all());
      return redirect()->route('grossPercents');
  }
  
  public function destroy($id)
  {
    GrossDomesticProductPercent::destroy($id);
      return redirect()->route('grossPercents');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new GrossDomesticProductPercentImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new GrossDomesticProductPercentExport, 'grossPercents.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
