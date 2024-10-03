<?php

namespace App\Http\Controllers;

use App\Models\TrafficByStates2019;
use Illuminate\Http\Request;
use App\Imports\TrafficByState2019Import;
use App\Exports\TrafficByState2019Export;
use Maatwebsite\Excel\Facades\Excel;

class TrafficByStates2019Controller extends Controller
{
    function traffic2019(){

$traffic2019s = TrafficByStates2019::all();

return view ('traffic2019', compact('traffic2019s'));


}





public function store(Request $request)
{
TrafficByStates2019::create($request->all());
return redirect()->route('traffic2019');
}

public function update(Request $request, $id)
{
$traffic2019s = TrafficByStates2019::findOrFail($id);
$traffic2019s->update($request->all());
return redirect()->route('traffic2019');
}

public function destroy($id)
{
TrafficByStates2019::destroy($id);
return redirect()->route('traffic2019');
}






public function import(Request $request)
{
try {
Excel::import(new TrafficByState2019Import, $request->file('file'));
return back()->with('success', ' imported successfully.');
} catch (\Exception $e) {
return back()->with('error', 'Error importing: ' . $e->getMessage());
}
}

public function export()
{
try {
return Excel::download(new TrafficByState2019Export, 'file.csv');
} catch (\Exception $e) {
return back()->with('error', 'Error exporting file: ' . $e->getMessage());
}
}
}
