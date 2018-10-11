<?php

namespace App\Http\Controllers\Web;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialityController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();

        return view('specialities.index', ['specialities' => $specialities]);
    }

    public function create()
    {
        return view('specialities.create');
    }

    public function edit(Speciality $speciality, $id)
    {
        $speciality = Speciality::findOrFail($id);

        return view('specialities.edit', ['speciality' => $speciality]);
    }
}
