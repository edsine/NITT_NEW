<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2013;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2013Import;
use App\Exports\TrafficByState2013Export;

class TrafficByStates2013Controller extends Controller
{
    function traffic2013(){

        $traffic2013s = TrafficByStates2013::all();
  
        return view ('traffic2013', compact('traffic2013s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2013::create($request->all());
      return redirect()->route('traffic2013');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2013s = TrafficByStates2013::findOrFail($id);
    $traffic2013s->update($request->all());
      return redirect()->route('traffic2013');
  }
  
  public function destroy($id)
  {
    TrafficByStates2013::destroy($id);
      return redirect()->route('traffic2013');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2013Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2013Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
