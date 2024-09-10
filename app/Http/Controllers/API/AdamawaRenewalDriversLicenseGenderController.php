<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdamawaRenewalDriversLicenseGender;

class AdamawaRenewalDriversLicenseGenderController extends Controller
{
    public function index()
    {
        $data = AdamawaRenewalDriversLicenseGender::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_a_male' => 'required|numeric',
            'class_a_female' => 'required|numeric',
            'class_b_male' => 'required|numeric',
            'class_b_female' => 'required|numeric',
            'class_c_male' => 'required|numeric',
            'class_c_female' => 'required|numeric',
            'class_d_male' => 'required|numeric',
            'class_d_female' => 'required|numeric',
            'class_e_male' => 'required|numeric',
            'class_e_female' => 'required|numeric',
            'class_h_male' => 'required|numeric',
            'class_h_female' => 'required|numeric',
            'class_i_male' => 'required|numeric',
            'class_i_female' => 'required|numeric',
        ]);

        $data = AdamawaRenewalDriversLicenseGender::create($request->all());

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = AdamawaRenewalDriversLicenseGender::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'class_a_male' => 'required|numeric',
            'class_a_female' => 'required|numeric',
            'class_b_male' => 'required|numeric',
            'class_b_female' => 'required|numeric',
            'class_c_male' => 'required|numeric',
            'class_c_female' => 'required|numeric',
            'class_d_male' => 'required|numeric',
            'class_d_female' => 'required|numeric',
            'class_e_male' => 'required|numeric',
            'class_e_female' => 'required|numeric',
            'class_h_male' => 'required|numeric',
            'class_h_female' => 'required|numeric',
            'class_i_male' => 'required|numeric',
            'class_i_female' => 'required|numeric',
        ]);

        $data = AdamawaRenewalDriversLicenseGender::find($id);

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
        $data = AdamawaRenewalDriversLicenseGender::find($id);

        if (is_null($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
