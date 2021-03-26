<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Occupation;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    public function index()
    {
        $occupations = Occupation::latest()->paginate(10);

        return response()->json([
            'status' => 200,
            'occupations' => $occupations
        ]);
    }

    public function searchArtisanWithOccupaction($search)
    {
        
        if ($search) {
            $occupation  = Occupation::where('name', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search . '%')
                            ->get();
            if ($occupation) {
                return response()->json([
                    'status' => 200,
                    'occupation' => $occupation
                ]);
                
            } else {
                return response()->json([
                    'message' => 'No record found'
                ]);
            }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Bad request'
            ]);
        }
    }
}