<?php

namespace App\Http\Controllers;

use App\Models\CausativeFactor;
use Illuminate\Http\Request;
use App\Imports\CausativeFactorImport;
use App\Exports\CausativeFactorExport;
use Maatwebsite\Excel\Facades\Excel;

class CausativeFactorController extends Controller
{
    function factor(){

        $factors = CausativeFactor::all();
  
        return view ('factor', compact('factors'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CausativeFactor::create($request->all());
      return redirect()->route('factor');
  }
  
  public function update(Request $request, $id)
  {
      $factors =CausativeFactor::findOrFail($id);
      $factors->update($request->all());
      return redirect()->route('factor');
  }
  
  public function destroy($id)
  {
    CausativeFactor::destroy($id);
      return redirect()->route('factor');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CausativeFactorImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CausativeFactorExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
