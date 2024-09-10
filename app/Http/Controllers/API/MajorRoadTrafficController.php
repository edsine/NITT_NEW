<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MajorRoadTraffic;

class MajorRoadTrafficController extends Controller
{
    public function index()
    {
        $data = MajorRoadTraffic::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'route' => 'required|string',
            '2017' => 'required|numeric',
            '2019' => 'required|numeric',
            '2020' => 'required|numeric',
            '2021' => 'required|numeric',
        ]);

        $data = MajorRoadTraffic::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = MajorRoadTraffic::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'route' => 'required|string',
            '2017' => 'required|numeric',
            '2019' => 'required|numeric',
            '2020' => 'required|numeric',
            '2021' => 'required|numeric',
        ]);

        $data = MajorRoadTraffic::find($id);

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
        $data = MajorRoadTraffic::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
