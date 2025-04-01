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
        $Trainingen = Training::all();
        return view('trainings.index', compact('trainingen'));
    }
}
