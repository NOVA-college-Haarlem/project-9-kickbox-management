<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index()
    {
        $trainingen = Trainer::all();
        return view('training.index', compact('training'));
    }
}
