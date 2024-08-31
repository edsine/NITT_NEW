<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NationalShip;

class NationalShipController extends Controller
{
    public function index()
    {
        $data = NationalShip::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer',
            'ship_traffic' => 'required|numeric',
            'container_traffic' => 'required|numeric',
            'cargo_throughput' => 'required|numeric',
        ]);

        $data = NationalShip::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = NationalShip::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|integer',
            'ship_traffic' => 'required|numeric',
            'container_traffic' => 'required|numeric',
            'cargo_throughput' => 'required|numeric',
        ]);

        $data = NationalShip::find($id);

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
        $data = NationalShip::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
