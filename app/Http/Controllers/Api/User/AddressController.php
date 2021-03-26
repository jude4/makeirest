<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
  
    public function show($id)
    {
        $address = UserDetail::find($id);

        return response()->json([
            'status' => 200,
            'address' => $address
        ]);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required|string',
            'location' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors()
            ]);
        }

        $userAddress = UserDetail::firstOrCreate([
            'address' => $request->address,
            'location' => $request->location,
            'user_id' => $request->user()->id
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'successful'
        ]);
    }
}