<?php

namespace App\Http\Controllers;

use App\Models\CausativeFactor2014;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CausativeFactor2014Import;
use App\Exports\CausativeFactor2014Export;

class CausativeFactor2014Controller extends Controller
{
    function factor14(){

        $factor14s = CausativeFactor2014::all();
  
        return view ('factor14', compact('factor14s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CausativeFactor2014::create($request->all());
      return redirect()->route('factor14');
  }
  
  public function update(Request $request, $id)
  {
      $factor14s =CausativeFactor2014::findOrFail($id);
      $factor14s->update($request->all());
      return redirect()->route('factor14');
  }
  
  public function destroy($id)
  {
    CausativeFactor2014::destroy($id);
      return redirect()->route('factor14');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CausativeFactor2014Import, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CausativeFactor2014Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
