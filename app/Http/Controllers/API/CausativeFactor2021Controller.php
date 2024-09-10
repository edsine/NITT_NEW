<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CausativeFactor2021;

class CausativeFactor2021Controller extends Controller
{
    public function index()
    {
        $data = CausativeFactor2021::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'state' => 'required|string',
            'spv' => 'required|numeric',
            'upwd' => 'required|numeric',
            'tbt' => 'required|numeric',
            'loc' => 'required|numeric',
            'mov' => 'required|numeric',
            'wov' => 'required|numeric',
            'bfl' => 'required|numeric',
            'ovc' => 'required|numeric',
            'dot' => 'required|numeric',
            'wot' => 'required|numeric',
            'dgd' => 'required|numeric',
            'brd' => 'required|numeric',
            'rtv' => 'required|numeric',
            'obs' => 'required|numeric',
            'sos' => 'required|numeric',
            'dov' => 'required|numeric',
            'dad' => 'required|numeric',
            'rov' => 'required|numeric',
            'pwr' => 'required|numeric',
            'ftq' => 'required|numeric',
            'slv' => 'required|numeric',
            'other' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $data = CausativeFactor2021::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = CausativeFactor2021::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'state' => 'required|string',
            'spv' => 'required|numeric',
            'upwd' => 'required|numeric',
            'tbt' => 'required|numeric',
            'loc' => 'required|numeric',
            'mov' => 'required|numeric',
            'wov' => 'required|numeric',
            'bfl' => 'required|numeric',
            'ovc' => 'required|numeric',
            'dot' => 'required|numeric',
            'wot' => 'required|numeric',
            'dgd' => 'required|numeric',
            'brd' => 'required|numeric',
            'rtv' => 'required|numeric',
            'obs' => 'required|numeric',
            'sos' => 'required|numeric',
            'dov' => 'required|numeric',
            'dad' => 'required|numeric',
            'rov' => 'required|numeric',
            'pwr' => 'required|numeric',
            'ftq' => 'required|numeric',
            'slv' => 'required|numeric',
            'other' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $data = CausativeFactor2021::find($id);

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
        $data = CausativeFactor2021::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
