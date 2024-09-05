<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FleetRoadCrashes1q2016;

class FleetRoadCrashes1q2016Controller extends Controller
{
    public function index()
    {
        $data = FleetRoadCrashes1q2016::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
           'no_of_cases' => 'required|integer',
            'no_of_killed' => 'required|numeric',
            'no_of_injured' => 'required|numeric',
            'total_casualties' => 'required|numeric',
            'no_of_persons_involved' => 'required|numeric',
        ]);

        $data = FleetRoadCrashes1q2016::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = FleetRoadCrashes1q2016::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'no_of_cases' => 'required|integer',
            'no_of_killed' => 'required|numeric',
            'no_of_injured' => 'required|numeric',
            'total_casualties' => 'required|numeric',
            'no_of_persons_involved' => 'required|numeric',
        ]);

        $data = FleetRoadCrashes1q2016::find($id);

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
        $data = FleetRoadCrashes1q2016::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
