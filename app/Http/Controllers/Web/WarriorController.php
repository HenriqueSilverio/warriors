<?php

namespace App\Http\Controllers\Web;

use App\Models\Type;
use App\Models\Warrior;
use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WarriorController extends Controller
{
    public function index()
    {
        $warriors = Warrior::with(['type', 'specialities'])->get();

        return view('warriors.index', ['warriors' => $warriors]);
    }

    public function create()
    {
        $data = [
            'types'        => Type::all(),
            'specialities' => Speciality::all(),
        ];

        return view('warriors.create', $data);
    }

    public function edit(Warrior $warrior, $id)
    {
        $data = [
            'types'        => Type::all(),
            'warrior'      => Warrior::with('specialities')->where('id', $id)->first(),
            'specialities' => Speciality::all(),
        ];

        return view('warriors.edit', $data);
    }
}
