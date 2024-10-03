<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2017;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2017Import;
use App\Exports\TrafficByState2017Export;

class TrafficByStates2017Controller extends Controller
{
    function traffic2017(){

        $traffic2017s = TrafficByStates2017::all();
  
        return view ('traffic2017', compact('traffic2017s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2017::create($request->all());
      return redirect()->route('traffic2017');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2017s = TrafficByStates2017::findOrFail($id);
    $traffic2017s->update($request->all());
      return redirect()->route('traffic2017');
  }
  
  public function destroy($id)
  {
    TrafficByStates2017::destroy($id);
      return redirect()->route('traffic2017');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2017Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2017Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
