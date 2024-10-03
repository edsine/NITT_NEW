<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2010;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2010Import;
use App\Exports\TrafficByState2010Export;

class TrafficByStates2010Controller extends Controller
{
    function traffic2010(){

        $traffic2010s = TrafficByStates2010::all();
  
        return view ('traffic2010', compact('traffic2010s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2010::create($request->all());
      return redirect()->route('traffic2010');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2010s = TrafficByStates2010::findOrFail($id);
    $traffic2010s->update($request->all());
      return redirect()->route('traffic2010');
  }
  
  public function destroy($id)
  {
    TrafficByStates2010::destroy($id);
      return redirect()->route('traffic2010');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2010Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2010Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
