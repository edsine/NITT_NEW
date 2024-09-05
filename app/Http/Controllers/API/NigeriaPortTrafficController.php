<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NigeriaPortTraffic;

class NigeriaPortTrafficController extends Controller
{
    
    public function index()
    {
        $data = NigeriaPortTraffic::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'port' => 'required|string',
            '2013' => 'required|numeric',
            '2014' => 'required|numeric',
            '2015' => 'required|numeric',
        ]);

        $data = NigeriaPortTraffic::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = NigeriaPortTraffic::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'port' => 'required|string',
            '2013' => 'required|numeric',
            '2014' => 'required|numeric',
            '2015' => 'required|numeric',
        ]);

        $data = NigeriaPortTraffic::find($id);

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
        $data = NigeriaPortTraffic::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
