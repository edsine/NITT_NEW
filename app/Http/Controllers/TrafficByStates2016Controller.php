<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2016;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2016Import;
use App\Exports\TrafficByState2016Export;

class TrafficByStates2016Controller extends Controller
{
    function traffic2016(){

        $traffic2016s = TrafficByStates2016::all();
  
        return view ('traffic2016', compact('traffic2016s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2016::create($request->all());
      return redirect()->route('traffic2016');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2016s = TrafficByStates2016::findOrFail($id);
    $traffic2016s->update($request->all());
      return redirect()->route('traffic2016');
  }
  
  public function destroy($id)
  {
    TrafficByStates2016::destroy($id);
      return redirect()->route('traffic2016');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2016Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2016Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
