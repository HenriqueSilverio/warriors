<?php

namespace App\Http\Controllers\Web;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('types.index', ['types' => $types]);
    }

    public function create()
    {
        return view('types.create');
    }

    public function edit(Type $type)
    {
        return view('types.edit', ['type' => $type]);
    }
}
