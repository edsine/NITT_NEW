<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrafficByStates2010;

class TrafficByStates2010Controller extends Controller
{
    public function index()
    {
        $data = TrafficByStates2010::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'state' => 'required|string',
            'fatal_cases' => 'required|numeric',
            'serious_cases' => 'required|numeric',
            'minor_cases' => 'required|numeric',
            'total_cases' => 'required|numeric',
            'persons_killed' => 'required|numeric',
            'persons_injured' => 'required|numeric',
            'total_casualty' => 'required|numeric',
        ]);

        $data = TrafficByStates2010::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = TrafficByStates2010::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'state' => 'required|string',
            'fatal_cases' => 'required|numeric',
            'serious_cases' => 'required|numeric',
            'minor_cases' => 'required|numeric',
            'total_cases' => 'required|numeric',
            'persons_killed' => 'required|numeric',
            'persons_injured' => 'required|numeric',
            'total_casualty' => 'required|numeric',
        ]);

        $data = TrafficByStates2010::find($id);

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
        $data = TrafficByStates2010::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }

}
