<?php

namespace App\Http\Controllers\Api;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreType;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();

        return response()->json([
            'success' => true,
            'data' => $types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\StoreType  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreType $request)
    {
        $type = Type::create($request->only('name'));

        return response()->json([
            'success' => true,
            'data'    => $type,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\StoreType  $request
     * @param  \App\Models\Type                  $type
     * @return \Illuminate\Http\Response
     */
    public function update(StoreType $request, Type $type)
    {
        $type->name = $request->input('name');

        $type->save();

        return response()->json([
            'success' => true,
            'data'    => $type,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return response()->json([
            'success' => true,
            'data'    => $type,
        ]);
    }
}
