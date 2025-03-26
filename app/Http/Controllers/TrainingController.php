<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('trainings.index');
    }

    public function create()
    {
        return view('trainings.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
    }

    public function show($id)
    {
        return view('trainings.show', ['id' => $id]);
    }

    
}
