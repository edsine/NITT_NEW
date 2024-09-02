<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RailPassengerTraffic;

class RailPassengerTrafficController extends Controller
{
    public function index()
    {
        $data = RailPassengerTraffic::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer',
            'passenger_volume' => 'required|numeric',
            'revenue' => 'required|numeric',
            'freight' => 'required|numeric',
        ]);

        $data = RailPassengerTraffic::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = RailPassengerTraffic::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|integer',
            'passenger_volume' => 'required|numeric',
            'revenue' => 'required|numeric',
            'freight' => 'required|numeric',
            
        ]);

        $data = RailPassengerTraffic::find($id);

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
        $data = RailPassengerTraffic::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
