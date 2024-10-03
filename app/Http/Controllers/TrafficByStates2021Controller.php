<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2021;
use Illuminate\Http\Request;
use App\Imports\TrafficByState2021Import;
use App\Exports\TrafficByState2021Export;
use Maatwebsite\Excel\Facades\Excel;

class TrafficByStates2021Controller extends Controller
{
    function traffic2021(){

        $traffic2021s = TrafficByStates2021::all();
  
        return view ('traffic2021', compact('traffic2021s'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    TrafficByStates2021::create($request->all());
      return redirect()->route('traffic2021');
  }
  
  public function update(Request $request, $id)
  {
    $traffic2021s = TrafficByStates2021::findOrFail($id);
    $traffic2021s->update($request->all());
      return redirect()->route('traffic2021');
  }
  
  public function destroy($id)
  {
    TrafficByStates2021::destroy($id);
      return redirect()->route('traffic2021');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new TrafficByState2021Import, $request->file('file'));
        return back()->with('success', ' imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new TrafficByState2021Export, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
}
