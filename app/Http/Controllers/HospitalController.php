<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospitals.index', compact('hospitals'));
    }

    public function show($id)
    {
        $hospital = Hospital::findOrFail($id);
        return view('hospitals.show', compact('hospital'));
    }

    public function alterarLeito($id)
    {
        $hospital = Hospital::findOrFail($id);
        
        return view('prontuario.lista', compact('hospital'));
    }
}
