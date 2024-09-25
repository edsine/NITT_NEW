<?php

namespace App\Http\Controllers;

use App\Models\MotorCyclePlateNumber;
use Illuminate\Http\Request;
use App\Imports\MotorCyclePlateNumberImport;
use App\Exports\MotorCyclePlateNumberExport;
use Maatwebsite\Excel\Facades\Excel;


class MotorCyclePlateNumberController extends Controller
{
    

    function motorCyclePlate(){

        $motorCyclePlates = MotorCyclePlateNumber::all();
  
        return view ('motorCyclePlate', compact('motorCyclePlates'));
        
  
        }
        
        
        
  
  
  public function store(Request $request)
  {
    MotorCyclePlateNumber::create($request->all());
      return redirect()->route('motorCyclePlate');
  }
  
  public function update(Request $request, $id)
  {
    $motorCyclePlates = MotorCyclePlateNumber::findOrFail($id);
    $motorCyclePlates->update($request->all());
      return redirect()->route('motorCyclePlate');
  }
  
  public function destroy($id)
  {
    MotorCyclePlateNumber::destroy($id);
      return redirect()->route('motorCyclePlate');
  }
  
 
  
  
  
  
  public function import(Request $request)
{
    try {
        Excel::import(new MotorCyclePlateNumberImport, $request->file('file'));
        return back()->with('success', 'Gross Billions imported successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error importing Gross Billions: ' . $e->getMessage());
    }
}

public function export()
{
    try {
        return Excel::download(new MotorCyclePlateNumberExport, 'file.csv');
    } catch (\Exception $e) {
        return back()->with('error', 'Error exporting file: ' . $e->getMessage());
    }
}



  
  }


