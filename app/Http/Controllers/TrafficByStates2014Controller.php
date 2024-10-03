<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2014;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrafficByState2014Import;
use App\Exports\TrafficByState2014Export;

class TrafficByStates2014Controller extends Controller
{
    function traffic2014(){

        $traffic2014s = TrafficByStates2014::all();
  
        return view ('traffic2014', compact('traffic2014s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2014::create($request->all());
      return redirect()->route('traffic2014');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2014s = TrafficByStates2014::findOrFail($id);
    $traffic2014s->update($request->all());
      return redirect()->route('traffic2014');
  }
  
  public function destroy($id)
  {
    TrafficByStates2014::destroy($id);
      return redirect()->route('traffic2014');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2014Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2014Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
