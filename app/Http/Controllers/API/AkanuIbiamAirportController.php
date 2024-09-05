<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AkanuIbiamAirport;

class AkanuIbiamAirportController extends Controller
{
    public function index()
    {
        $data = AkanuIbiamAirport::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer',
            'domestic_passenger_traffic' => 'required|numeric',
            'international_passenger_traffic' => 'required|numeric',
            'air_traffic_domestic' => 'required|numeric',
            'air_traffic_international' => 'required|numeric',
            'cargo_traffic_domestic' => 'required|numeric',
            'cargo_traffic_international' => 'required|numeric',
            'mail_traffic_domestic' => 'required|numeric',
            'mail_traffic_international' => 'required|numeric',
        ]);

        $data = AkanuIbiamAirport::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = AkanuIbiamAirport::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|integer',
            'domestic_passenger_traffic' => 'required|numeric',
            'international_passenger_traffic' => 'required|numeric',
            'air_traffic_domestic' => 'required|numeric',
            'air_traffic_international' => 'required|numeric',
            'cargo_traffic_domestic' => 'required|numeric',
            'cargo_traffic_international' => 'required|numeric',
            'mail_traffic_domestic' => 'required|numeric',
            'mail_traffic_international' => 'required|numeric',
        ]);

        $data = AkanuIbiamAirport::find($id);

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
        $data = AkanuIbiamAirport::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
