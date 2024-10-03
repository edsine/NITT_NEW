<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2011;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2011Import;
use App\Exports\TrafficByState2011Export;

class TrafficByStates2011Controller extends Controller
{
    function traffic2011(){

        $traffic2011s = TrafficByStates2011::all();
  
        return view ('traffic2011', compact('traffic2011s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2011::create($request->all());
      return redirect()->route('traffic2011');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2011s = TrafficByStates2011::findOrFail($id);
    $traffic2011s->update($request->all());
      return redirect()->route('traffic2011');
  }
  
  public function destroy($id)
  {
    TrafficByStates2011::destroy($id);
      return redirect()->route('traffic2011');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2011Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2011Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
