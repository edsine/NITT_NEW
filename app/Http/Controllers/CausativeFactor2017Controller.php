<?php

namespace App\Http\Controllers;

use App\Models\CausativeFactor2017;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CausativeFactor2017Import;
use App\Exports\CausativeFactor2017Export;

class CausativeFactor2017Controller extends Controller
{
    function factor17(){

        $factor14s = CausativeFactor2017::all();
  
        return view ('factor17', compact('factor17s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CausativeFactor2017::create($request->all());
      return redirect()->route('factor17');
  }
  
  public function update(Request $request, $id)
  {
      $factor17s =CausativeFactor2017::findOrFail($id);
      $factor17s->update($request->all());
      return redirect()->route('factor17');
  }
  
  public function destroy($id)
  {
    CausativeFactor2017::destroy($id);
      return redirect()->route('factor17');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CausativeFactor2017Import, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CausativeFactor2017Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
