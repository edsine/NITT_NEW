<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonsInjuredRoadCrashes;

class PersonsInjuredRoadCrashesController extends Controller
{
    public function index()
    {
        $data = PersonsInjuredRoadCrashes::all();
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

        $data = PersonsInjuredRoadCrashes::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = PersonsInjuredRoadCrashes::find($id);

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

        $data = PersonsInjuredRoadCrashes::find($id);

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
        $data = PersonsInjuredRoadCrashes::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
