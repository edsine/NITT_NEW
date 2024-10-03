<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2009;
use Illuminate\Http\Request;
use App\Imports\TrafficByState2009Import;
use App\Exports\TrafficByState2009Export;
use Maatwebsite\Excel\Facades\Excel;

class TrafficByStates2009Controller extends Controller
{
    function traffic2009(){

        $traffic2009s = TrafficByStates2009::all();
  
        return view ('traffic2009', compact('traffic2009s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2009::create($request->all());
      return redirect()->route('traffic2009');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2009s = TrafficByStates2009::findOrFail($id);
    $traffic2009s->update($request->all());
      return redirect()->route('traffic2009');
  }
  
  public function destroy($id)
  {
    TrafficByStates2009::destroy($id);
      return redirect()->route('traffic2009');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2009Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2009Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
