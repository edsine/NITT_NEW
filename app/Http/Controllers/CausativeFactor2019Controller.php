<?php

namespace App\Http\Controllers;

use App\Models\CausativeFactor2019;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CausativeFactor2019Import;
use App\Exports\CausativeFactor2019Export;

class CausativeFactor2019Controller extends Controller
{
    function factor19(){

        $factor19s = CausativeFactor2019::all();
  
        return view ('factor19', compact('factor19s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CausativeFactor2019::create($request->all());
      return redirect()->route('factor19');
  }
  
  public function update(Request $request, $id)
  {
      $factor19s =CausativeFactor2019::findOrFail($id);
      $factor19s->update($request->all());
      return redirect()->route('factor19');
  }
  
  public function destroy($id)
  {
    CausativeFactor2019::destroy($id);
      return redirect()->route('factor19');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CausativeFactor2019Import, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CausativeFactor2019Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
