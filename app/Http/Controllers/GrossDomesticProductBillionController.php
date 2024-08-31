<?php

namespace App\Http\Controllers;

use App\Models\GrossDomesticProductBillion;
use Illuminate\Http\Request;

class GrossDomesticProductBillionController extends Controller
{
    public function index()
    {
        $data = GrossDomesticProductBillion::all();
        return view('grossdomesticproduction_billion.index', compact('data'));
    }

    public function create()
    {
        return view('grossdomesticproduction_billion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer',
            'transportation_and_storage' => 'required|numeric',
            'road_transport' => 'required|numeric',
            'rail_transport_and_pipelines' => 'required|numeric',
            'water_transport' => 'required|numeric',
            'air_transport' => 'required|numeric',
            'transport_services' => 'required|numeric',
            'post_and_courier_services' => 'required|numeric',
        ]);

        GrossDomesticProductBillion::create($request->all());

        return redirect()->route('grossdomesticproduction_billion.index')
                         ->with('success', 'Data added successfully');
    }

    public function show(GrossDomesticProductBillion $transportGdp)
    {
        return view('grossdomesticproduction_billion.show', compact('transportGdp'));
    }

    public function edit(GrossDomesticProductBillion $transportGdp)
    {
        return view('grossdomesticproduction_billion.edit', compact('transportGdp'));
    }

    public function update(Request $request, GrossDomesticProductBillion $transportGdp)
    {
        $request->validate([
            'year' => 'required|integer',
            'transportation_and_storage' => 'required|numeric',
            'road_transport' => 'required|numeric',
            'rail_transport_and_pipelines' => 'required|numeric',
            'water_transport' => 'required|numeric',
            'air_transport' => 'required|numeric',
            'transport_services' => 'required|numeric',
            'post_and_courier_services' => 'required|numeric',
        ]);

        $transportGdp->update($request->all());

        return redirect()->route('grossdomesticproduction_billion.index')
                         ->with('success', 'Data updated successfully');
    }

    public function destroy(GrossDomesticProductBillion $transportGdp)
    {
        $transportGdp->delete();

        return redirect()->route('grossdomesticproduction_billion.index')
                         ->with('success', 'Data deleted successfully');
    }
}
