<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2008;
use Illuminate\Http\Request;
use App\Imports\TrafficByState2008Import;
use App\Exports\TrafficByState2008Export;
use Maatwebsite\Excel\Facades\Excel;

class TrafficByStates2008Controller extends Controller
{
     function traffic2008(){

$traffic2008s = TrafficByStates2008::all();

return view ('traffic2008', compact('traffic2008s'));


}





public function store(Request $request)
{
TrafficByStates2008::create($request->all());
return redirect()->route('traffic2008');
}

public function update(Request $request, $id)
{
$traffic2008s = TrafficByStates2008::findOrFail($id);
$traffic2008s->update($request->all());
return redirect()->route('traffic2008');
}

public function destroy($id)
{
TrafficByStates2008::destroy($id);
return redirect()->route('traffic2008');
}






public function import(Request $request)
{
try {
Excel::import(new TrafficByState2008Import, $request->file('file'));
return back()->with('success', ' imported successfully.');
} catch (\Exception $e) {
return back()->with('error', 'Error importing: ' . $e->getMessage());
}
}

public function export()
{
try {
return Excel::download(new TrafficByState2008Export, 'file.csv');
} catch (\Exception $e) {
return back()->with('error', 'Error exporting file: ' . $e->getMessage());
}
}
}
