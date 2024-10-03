<?php

namespace App\Http\Controllers;

use App\Models\CausativeFactor2021;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CausativeFactor2021Import;
use App\Exports\CausativeFactor2021Export;

class CausativeFactor2021Controller extends Controller
{
    function factor21(){

        $factor21s = CausativeFactor2021::all();
  
        return view ('factor21', compact('factor21s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    CausativeFactor2021::create($request->all());
      return redirect()->route('factor21');
  }
  
  public function update(Request $request, $id)
  {
      $factor21s =CausativeFactor2021::findOrFail($id);
      $factor21s->update($request->all());
      return redirect()->route('factor21');
  }
  
  public function destroy($id)
  {
    CausativeFactor2021::destroy($id);
      return redirect()->route('factor21');
  }
  
 
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new CausativeFactor2021Import, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new CausativeFactor2021Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
