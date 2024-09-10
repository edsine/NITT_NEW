<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AkwaIbomFleet;

class AkwaIbomfleetController extends Controller
{
    public function index()
    {
        $data = AkwaIbomFleet::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|numeric',
            '4pc' => 'required|numeric',
            '7pc' => 'required|numeric',
            '10pc_minibus' => 'required|numeric',
            '14pc_minibus' => 'required|numeric',
            '18pc_minibus' => 'required|numeric',
            'coaster' => 'required|numeric',
            'big_bus' => 'required|numeric',
        ]);

        $data = AkwaIbomFleet::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = AkwaIbomFleet::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|numeric',
            '4pc' => 'required|numeric',
            '7pc' => 'required|numeric',
            '10pc_minibus' => 'required|numeric',
            '14pc_minibus' => 'required|numeric',
            '18pc_minibus' => 'required|numeric',
            'coaster' => 'required|numeric',
            'big_bus' => 'required|numeric',
        ]);

        $data = AkwaIbomFleet::find($id);

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
        $data = AkwaIbomFleet::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
