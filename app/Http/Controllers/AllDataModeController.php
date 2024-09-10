<?php

namespace App\Http\Controllers;

use App\Models\AllDataMode;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\GrossDomesticProductBillion;
use App\Models\GrossDomesticProductPercent;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GrossDomesticProductBillionImport;
use App\Imports\GrossDomesticProductPercentImport;
use App\Exports\GrossDomesticProductBillionExport;
use App\Exports\GrossDomesticProductPercentExport;

class AllDataModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allMode()
    {
        $grossBillions = GrossDomesticProductBillion::all();
    $grossPercents = GrossDomesticProductPercent::all();

    return view('allMode', compact('grossBillions', 'grossPercents'));

    
    }


    public function showTable(Request $request)
    {
        $selectedTable = $request->input('selected_table');
        $tableData = [];
    
        // Fetch data based on selected table
        if ($selectedTable == 'gross_billion') {
            $tableData = GrossDomesticProductBillion::all();
        } elseif ($selectedTable == 'gross_percent') {
            $tableData = GrossDomesticProductPercent::all();
        }
    
        // Pass both $tableData and $selectedTable to the view
        return view('allMode', compact('tableData', 'selectedTable'));
    }
    











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllDataMode  $allDataMode
     * @return \Illuminate\Http\Response
     */
    public function show(AllDataMode $allDataMode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllDataMode  $allDataMode
     * @return \Illuminate\Http\Response
     */
    public function edit(AllDataMode $allDataMode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllDataMode  $allDataMode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllDataMode $allDataMode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllDataMode  $allDataMode
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllDataMode $allDataMode)
    {
        //
    }


 // Export Gross Billion
 public function exportGrossBillion()
 {
     return Excel::download(new GrossDomesticProductBillionExport, 'gross_billion.xlsx');
 }

 // Export Gross Percent
 public function exportGrossPercent()
 {
     return Excel::download(new GrossDomesticProductPercentExport, 'gross_percent.xlsx');
 }

 // Import Gross Billion
 public function importGrossBillion(Request $request)
 {
     Excel::import(new GrossDomesticProductBillionImport, $request->file('file'));
     return redirect()->back()->with('success', 'Gross Billion Data Imported Successfully');
 }

 // Import Gross Percent
 public function importGrossPercent(Request $request)
 {
     Excel::import(new GrossDomesticProductPercentImport, $request->file('file'));
     return redirect()->back()->with('success', 'Gross Percent Data Imported Successfully');
 }




 public function airDashboard() {
    return view('airModeDashboard'); 
}

public function railDashboard() {
    return view('railModeDashboard'); 
}

public function vehicleDashboard() {
    return view('vehicleProductionDashboard'); 
}

public function fleetDashboard() {
    return view('fleetOperatorDashboard'); 
}

public function causativeDashboard() {
    return view('causativeFactorDashboard'); 
}

public function nationalDashboard() {
    return view('nationalDriversLicenseDashboard'); 
}

public function roadDashboard() {
    return view('roadModeDashboard'); 
}


}
