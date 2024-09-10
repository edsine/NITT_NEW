<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MotorCyclePlateNumber;

class MotorCyclePlateNumberController extends Controller
{
    public function index()
    {
        $data = MotorCyclePlateNumber::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            '2008' => 'required|numeric',
            '2009' => 'required|numeric',
            '2010' => 'required|numeric',
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

        $data = MotorCyclePlateNumber::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = MotorCyclePlateNumber::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string',
            '2008' => 'required|numeric',
            '2009' => 'required|numeric',
            '2010' => 'required|numeric',
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

        $data = MotorCyclePlateNumber::find($id);

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
        $data = MotorCyclePlateNumber::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
