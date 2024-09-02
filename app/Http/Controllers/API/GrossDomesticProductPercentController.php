<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GrossDomesticProductPercent;

class GrossDomesticProductPercentController extends Controller
{
    
    public function index()
    {
        $data = GrossDomesticProductPercent::all();
        return response()->json($data);
    }

    public function store(Request $request)
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

        $data = GrossDomesticProductPercent::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = GrossDomesticProductPercent::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
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

        $data = GrossDomesticProductPercent::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->update($request->all());

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $data = GrossDomesticProductPercent::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
