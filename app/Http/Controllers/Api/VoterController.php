<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
            'date_of_birth' => 'required|date|before:today',
            'phone_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255|unique:voters,email',
            'residential_address' => 'required|string',
            'local_government_area' => 'required|string|max:255',
            'ward' => 'required|string|max:255',
            'polling_unit' => 'required|string|max:255',
            'voters_card_number' => 'required|string|max:50|unique:voters,voters_card_number',
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
}
