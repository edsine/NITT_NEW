<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2020;
use Illuminate\Http\Request;
use App\Imports\TrafficByState2020Import;
use App\Exports\TrafficByState2020Export;
use Maatwebsite\Excel\Facades\Excel;

class TrafficByStates2020Controller extends Controller
{
    function traffic2020(){

        $traffic2020s = TrafficByStates2020::all();
  
        return view ('traffic2020', compact('traffic2020s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2020::create($request->all());
      return redirect()->route('traffic2020');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2020s = TrafficByStates2020::findOrFail($id);
    $traffic2020s->update($request->all());
      return redirect()->route('traffic2020');
  }
  
  public function destroy($id)
  {
    TrafficByStates2020::destroy($id);
      return redirect()->route('traffic2020');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2020Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2020Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
