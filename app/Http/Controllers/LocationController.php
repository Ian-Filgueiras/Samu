<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getLocation(Request $request)
    {
        
        $validated = $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

       
        return response()->json([
            'status' => 'success',
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude']
        ]);
    }
}
