<?php

namespace App\Http\Controllers;

use App\Models\GrossDomesticProductPercent;
use Illuminate\Http\Request;

class GrossDomesticProductPercentController extends Controller
{
    public function index()
    {
        $data = GrossDomesticProductPercent::all();
        return view('grossdomesticproduction_percent.index', compact('data'));
    }

    public function create()
    {
        return view('grossdomesticproduction_percent.create');
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

        GrossDomesticProductPercent::create($request->all());

        return redirect()->route('grossdomesticproduction_percent.index')
                         ->with('success', 'Data added successfully');
    }

    public function show(GrossDomesticProductPercent $transportGdp)
    {
        return view('grossdomesticproduction_percent.show', compact('transportGdp'));
    }

    public function edit(GrossDomesticProductPercent $transportGdp)
    {
        return view('grossdomesticproduction_percent.edit', compact('transportGdp'));
    }

    public function update(Request $request, GrossDomesticProductPercent $transportGdp)
    {
        $request->validate([
            'year' => 'required|integer',
            'road_transport' => 'required|numeric',
            'rail_transport_and_pipelines' => 'required|numeric',
            'water_transport' => 'required|numeric',
            'air_transport' => 'required|numeric',
            'transport_services' => 'required|numeric',
            'post_and_courier_services' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $transportGdp->update($request->all());

        return redirect()->route('grossdomesticproduction_percent.index')
                         ->with('success', 'Data updated successfully');
    }

    public function destroy(GrossDomesticProductPercent $transportGdp)
    {
        $transportGdp->delete();

        return redirect()->route('grossdomesticproduction_percent.index')
                         ->with('success', 'Data deleted successfully');
    }
}
