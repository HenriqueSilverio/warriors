<?php

namespace App\Http\Controllers\Api;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreSpeciality;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = Speciality::all();

        return response()->json([
            'success' => true,
            'data' => $specialities,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\StoreSpeciality  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpeciality $request)
    {
        $speciality = Speciality::create($request->only('name'));

        return response()->json([
            'success' => true,
            'data'    => $speciality,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\StoreSpeciality  $request
     * @param  \App\Models\Speciality                  $speciality
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSpeciality $request, Speciality $speciality)
    {
        $speciality->name = $request->input('name');

        $speciality->save();

        return response()->json([
            'success' => true,
            'data'    => $speciality,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speciality $speciality)
    {
        $speciality->delete();

        return response()->json([
            'success' => true,
            'data'    => $speciality,
        ]);
    }
}
