<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2012;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2012Import;
use App\Exports\TrafficByState2012Export;

class TrafficByStates2012Controller extends Controller
{
    function traffic2012(){

        $traffic2012s = TrafficByStates2012::all();
  
        return view ('traffic2012', compact('traffic2012s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2012::create($request->all());
      return redirect()->route('traffic2012');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2012s = TrafficByStates2012::findOrFail($id);
    $traffic2012s->update($request->all());
      return redirect()->route('traffic2012');
  }
  
  public function destroy($id)
  {
    TrafficByStates2012::destroy($id);
      return redirect()->route('traffic2012');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2012Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2012Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
