<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleImportation;
use App\DataTables\vehicleImportationDataTable;
use Yajra\DataTables\DataTables;
use illuminate\Http\RedirectResponse;



class VehicleImportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
      
      
      function records(){

      $records = VehicleImportation::all();

      return view ('vehicleImportation', compact('records'));
      

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
   // public function store(Request $request)
   // {
        //
   // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
   // {
        //
   // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function destroy($id)
   // {
        //
   // }











//public function records()
//{
 //   $records = VehicleImportation::all();
 //   return view('vehicleImportation', ['records' => $records]);
//}

public function store(Request $request)
{
    VehicleImportation::create($request->all());
    return redirect()->route('records');
}

public function update(Request $request, $id)
{
    $record = VehicleImportation::findOrFail($id);
    $record->update($request->all());
    return redirect()->route('records');
}

public function destroy($id)
{
    VehicleImportation::destroy($id);
    return redirect()->route('records');
}


}



