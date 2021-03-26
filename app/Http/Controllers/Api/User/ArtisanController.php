<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function show($id)
    {
         $artisan = User::find($id);

        if ($artisan) {
             $artisanInfo =  $artisan = User::with('occupation', 'completedJobs', 'testimonials')->find($id);

            return response()->json([
                'status' => 200,
                'artisanInfo'=> $artisanInfo 
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Artisan not found'
            ]);
        } 
    }
}