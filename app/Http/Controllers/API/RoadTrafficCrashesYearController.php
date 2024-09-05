<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoadTrafficCrashesYear;

class RoadTrafficCrashesYearController extends Controller
{
    public function index()
    {
        $data = RoadTrafficCrashesYear::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer',
            'fatal_cases' => 'required|numeric',
            'serious_cases' => 'required|numeric',
            'minor_cases' => 'required|numeric',
            'total_cases' => 'required|numeric',
            'persons_killed' => 'required|numeric',
            'persons_injured' => 'required|numeric',
            'total_casualty' => 'required|numeric',
        ]);

        $data = RoadTrafficCrashesYear::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = RoadTrafficCrashesYear::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|integer',
            'fatal_cases' => 'required|numeric',
            'serious_cases' => 'required|numeric',
            'minor_cases' => 'required|numeric',
            'total_cases' => 'required|numeric',
            'persons_killed' => 'required|numeric',
            'persons_injured' => 'required|numeric',
            'total_casualty' => 'required|numeric',
        ]);

        $data = RoadTrafficCrashesYear::find($id);

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
        $data = RoadTrafficCrashesYear::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }

}
