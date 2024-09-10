<?php
namespace App\Http\Controllers;

use App\Models\RailPassengerTraffic;
use Illuminate\Http\Request;
use App\Imports\RailPassengerTrafficImport;
use App\Exports\RailPassengerTrafficExport;
use Maatwebsite\Excel\Facades\Excel;

class RailPassengerTrafficController extends Controller
{
    function RailPassengerTraffics(){

        $RailPassengerTraffics = RailPassengerTraffic::all();
  
        return view ('RailPassengerTraffic', compact('RailPassengerTraffics'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    RailPassengerTraffic::create($request->all());
      return redirect()->route('RailPassengerTraffic');
  }
  
  public function update(Request $request, $id)
  {
      $RailPassengerTraffics = RailPassengerTraffic::findOrFail($id);
      $RailPassengerTraffics->update($request->all());
      return redirect()->route('RailPassengerTraffic');
  }
  
  public function destroy($id)
  {
    RailPassengerTraffic::destroy($id);
      return redirect()->route('RailPassengerTraffic');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new RailPassengerTrafficImport, $request->file('file'));
        return back()->with('success', 'Imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing file: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new RailPassengerTrafficExport, 'railPassenger.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}
  

}
