<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2022;
use Illuminate\Http\Request;
use App\Imports\TrafficByState2022Import;
use App\Exports\TrafficByState2022Export;
use Maatwebsite\Excel\Facades\Excel;

class TrafficByStates2022Controller extends Controller
{
    function traffic2022(){

        $traffic2022s = TrafficByStates2022::all();
  
        return view ('traffic2022', compact('traffic2022s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2022::create($request->all());
      return redirect()->route('traffic2022');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2022s = TrafficByStates2022::findOrFail($id);
    $traffic2022s->update($request->all());
      return redirect()->route('traffic2022');
  }
  
  public function destroy($id)
  {
    TrafficByStates2022::destroy($id);
      return redirect()->route('traffic2022');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2022Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2022Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
