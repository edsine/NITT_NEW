<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdamawaTrafficOffencesVio;

class AdamawaTrafficOffencesVioController extends Controller
{
    public function index()
    {
        $data = AdamawaTrafficOffencesVio::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'traffic_offences' => 'required|string',
            '2010' => 'required|numeric',
            '2011' => 'required|numeric',
            '2012' => 'required|numeric',
            '2013' => 'required|numeric',
            '2014' => 'required|numeric',
            '2015' => 'required|numeric',
            '2016' => 'required|numeric',
            '2017' => 'required|numeric',
            '2018' => 'required|numeric',
            '2019' => 'required|numeric',
            '2020' => 'required|numeric',
            '2021' => 'required|numeric',
            '2022' => 'required|numeric',
        ]);

        $data = AdamawaTrafficOffencesVio::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = AdamawaTrafficOffencesVio::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'traffic_offences' => 'required|string',
            '2010' => 'required|numeric',
            '2011' => 'required|numeric',
            '2012' => 'required|numeric',
            '2013' => 'required|numeric',
            '2014' => 'required|numeric',
            '2015' => 'required|numeric',
            '2016' => 'required|numeric',
            '2017' => 'required|numeric',
            '2018' => 'required|numeric',
            '2019' => 'required|numeric',
            '2020' => 'required|numeric',
            '2021' => 'required|numeric',
            '2022' => 'required|numeric',
        ]);

        $data = AdamawaTrafficOffencesVio::find($id);

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
        $data = AdamawaTrafficOffencesVio::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
