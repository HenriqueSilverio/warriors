<?php

namespace App\Http\Controllers\Api;

use App\Models\Warrior;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Api\StoreWarrior;

class WarriorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warriors = Warrior::all();

        return response()->json([
            'success' => true,
            'data'    => $warriors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\StoreWarrior  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarrior $request)
    {
        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $path = $request->thumbnail->store('uploads', 'public');

            $data['thumbnail'] = $path;
        }

        $warrior = Warrior::create($data);

        $warrior->specialities()->sync($request->input('speciality_id'));

        return response()->json([
            'success' => true,
            'data'    => $warrior,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\StoreWarrior  $request
     * @param  \App\Models\Warrior                  $warrior
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWarrior $request, Warrior $warrior)
    {
        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $path = $request->thumbnail->store('uploads', 'public');

            $data['thumbnail'] = $path;
        }

        $warrior->fill($data);

        $warrior->save();

        $warrior->specialities()->sync($request->input('speciality_id'));

        return response()->json([
            'success' => true,
            'data'    => $warrior,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warrior  $warrior
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warrior $warrior)
    {
        $warrior->delete();

        return response()->json([
            'success' => true,
            'data'    => $warrior,
        ]);
    }
}
