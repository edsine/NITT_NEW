<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2018;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2018Import;
use App\Exports\TrafficByState2018Export;

class TrafficByStates2018Controller extends Controller
{
    function traffic2018(){

        $traffic2018s = TrafficByStates2018::all();
  
        return view ('traffic2018', compact('traffic2018s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2018::create($request->all());
      return redirect()->route('traffic2018');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2018s = TrafficByStates2018::findOrFail($id);
    $traffic2018s->update($request->all());
      return redirect()->route('traffic2018');
  }
  
  public function destroy($id)
  {
    TrafficByStates2018::destroy($id);
      return redirect()->route('traffic2018');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2018Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2018Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
