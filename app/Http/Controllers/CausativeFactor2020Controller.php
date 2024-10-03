<?php

namespace App\Http\Controllers;

use App\Models\CausativeFactor2020;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CausativeFactor2020Import;
use App\Exports\CausativeFactor2020Export;

class CausativeFactor2020Controller extends Controller
{
    function factor20(){

        $factor14s = CausativeFactor2020::all();
  
        return view ('factor20', compact('factor20s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CausativeFactor2020::create($request->all());
      return redirect()->route('factor20');
  }
  
  public function update(Request $request, $id)
  {
      $factor20s =CausativeFactor2020::findOrFail($id);
      $factor20s->update($request->all());
      return redirect()->route('factor20');
  }
  
  public function destroy($id)
  {
    CausativeFactor2020::destroy($id);
      return redirect()->route('factor20');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CausativeFactor2020Import, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CausativeFactor2020Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
