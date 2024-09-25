<?php

namespace App\Http\Controllers;

use App\Models\NationalDriversLicenseStates;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NationalDriversLiceseStatesExport;
use App\Imports\NationalDriversLiceseStatesImport;

class NationalDriversLicenseStatesController extends Controller
{
      
    
        function nationalDrivers(){
    
            $nationalDrivers = NationalDriversLicenseStates::all();
      
            return view ('nationalDrivers', compact('nationalDrivers'));
            
      
            }
            
            
            
      
      
      public function store(Request $request)
      {
        NationalDriversLicenseStates::create($request->all());
          return redirect()->route('nationalDrivers');
      }
      
      public function update(Request $request, $id)
      {
        $nationalDrivers= NationalDriversLicenseStates::findOrFail($id);
        $nationalDrivers->update($request->all());
          return redirect()->route('nationalDrivers');
      }
      
      public function destroy($id)
      {
        NationalDriversLicenseStates::destroy($id);
          return redirect()->route('nationalDrivers');
      }
      
     
      
      
      
      
      public function import(Request $request)
    {
        try {
            Excel::import(new NationalDriversLiceseStatesImport, $request->file('file'));
            return back()->with('success', 'imported successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error importing File: ' . $e->getMessage());
        }
    }
    
    public function export()
    {
        try {
            return Excel::download(new NationalDriversLiceseStatesExport, 'file.csv');
        } catch (\Exception $e) {
            return back()->with('error', 'Error exporting file: ' . $e->getMessage());
        }
    }
    
    
    
      
      }
    
    
    