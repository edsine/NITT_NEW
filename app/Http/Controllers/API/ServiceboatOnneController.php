<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceboatOnne;

class ServiceboatOnneController extends Controller
{
   
    public function index()
    {
        $data = ServiceboatOnne::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer',
            'number_of_vehicles' => 'required|numeric',
            'grt' => 'required|numeric',
        ]);

        $data = ServiceboatOnne::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = ServiceboatOnne::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|integer',
            'number_of_vehicles' => 'required|numeric',
            'grt' => 'required|numeric',
        ]);

        $data = ServiceboatOnne::find($id);

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
        $data = ServiceboatOnne::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }

}
