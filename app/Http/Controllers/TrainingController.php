<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainingen = Training::all();
        return view('trainings.index', compact('trainingen'));
    }

    public function create()
    {
        return view('trainings.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('trainings.index');
    }

    public function show($id)
    {
        return view('trainings.show', ['id' => $id]);
    }
}
