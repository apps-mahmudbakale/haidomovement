<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use App\Models\Ward;
use App\Models\LGA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class VoterController extends Controller
{
    /**
     * Display a listing of voters.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $voters = Voter::latest()->paginate(10);
        return response()->json($voters);
    }

    /**
     * Store a newly created voter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'age_range' => 'required|in:18-25,26-30,31-40,41-50,51-60,61-70,71+',
            'phone_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255|unique:voters,email',
            'residential_address' => 'required|string',
            'lga_id' => 'required|exists:l_g_a_s,id',
            'ward_id' => [
                'required',
                Rule::exists('wards', 'id')->where(function ($query) use ($request) {
                    $query->where('lga_id', $request->lga_id);
                })
            ],
            'polling_unit_id' => [
                'required',
                Rule::exists('polling_units', 'id')->where(function ($query) use ($request) {
                    $query->where('ward_id', $request->ward_id);
                })
            ],
            'voters_card_number' => 'required|string|max:50|unique:voters,voters_card_number',
        ], [
            'ward_id.exists' => 'The selected ward does not exist in the specified LGA.',
            'polling_unit_id.exists' => 'The selected polling unit does not exist in the specified ward.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $voter = Voter::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Voter created successfully',
            'data' => $voter
        ], 201);
    }

    /**
     * Display the specified voter.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Voter $voter)
    {
        return response()->json([
            'status' => 'success',
            'data' => $voter
        ]);
    }

    /**
     * Update the specified voter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Voter $voter)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'sometimes|required|string|max:255',
            'gender' => 'sometimes|required|in:male,female,other',
            'date_of_birth' => 'sometimes|required|date|before:today',
            'phone_number' => 'sometimes|required|string|max:20',
            'email' => [
                'sometimes',
                'required',
                'email',
                'max:255',
                Rule::unique('voters')->ignore($voter->id)
            ],
            'residential_address' => 'sometimes|required|string',
            'local_government_area' => 'sometimes|required|string|max:255',
            'ward' => 'sometimes|required|string|max:255',
            'polling_unit' => 'sometimes|required|string|max:255',
            'voters_card_number' => [
                'sometimes',
                'required',
                'string',
                'max:50',
                Rule::unique('voters')->ignore($voter->id)
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $voter->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Voter updated successfully',
            'data' => $voter
        ]);
    }

    /**
     * Remove the specified voter from storage.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Voter $voter)
    {
        $voter->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Voter deleted successfully'
        ]);
    }

    /**
     * Get polling units by ward ID
     *
     * @param  int  $wardId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPollingUnitsByWard($wardId)
    {
        $ward = Ward::with('pollingUnits')
            ->find($wardId);

        if (!$ward) {
            return response()->json([
                'status' => 'error',
                'message' => 'Ward not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'ward' => $ward->name,
                'polling_units' => $ward->pollingUnits
            ]
        ]);
    }

    /**
     * Get wards by LGA name
     *
     * @param  string  $lgaName
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWardsByLga($lgaName)
    {
        $lga = LGA::where('name', 'like', '%' . $lgaName . '%')
            ->with('wards')
            ->first();

        if (!$lga) {
            return response()->json([
                'status' => 'error',
                'message' => 'LGA not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'lga' => $lga->name,
                'wards' => $lga->wards
            ]
        ]);
    }
}
