<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2006;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2006Import;
use App\Exports\TrafficByState2006Export;

class TrafficByStates2006Controller extends Controller
{
    function traffic2006(){

        $traffic2006s = TrafficByStates2006::all();
  
        return view ('traffic2006', compact('traffic2006s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2006::create($request->all());
      return redirect()->route('traffic2006');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2006s = TrafficByStates2006::findOrFail($id);
    $traffic2006s->update($request->all());
      return redirect()->route('traffic2006');
  }
  
  public function destroy($id)
  {
    TrafficByStates2006::destroy($id);
      return redirect()->route('traffic2006');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2006Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2006Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
