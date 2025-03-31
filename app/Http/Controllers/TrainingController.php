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
        $trainings = Training::with('instructor')->get(); // Eager load the instructor relationship
        return view('training.index', compact('trainings'));
    }

    public function create()
    {
        // Fetch only users who are instructors
        $instructors = User::where('is_instructor', true)->get();

        // Pass the instructors to the view
        return view('training.create', compact('instructors'));
    }
    

    public function store(Request $request)
    {
        // Optioneel: validatie van de binnengekomen data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'user_id' => 'required|exists:users,id',
            'difficulty' => 'required|string',
            'capacity' => 'required|integer|min:1',
            'is_recurring' => 'required|in:not recurring,2x per week,1x per week,monthly',
        ]);
    
        // Creëer een nieuwe training met de gegevens uit het formulier
        Training::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'user_id' => $request->input('user_id'),
            'difficulty' => $request->input('difficulty'),
            'capacity' => $request->input('capacity'),
            'is_recurring' => $request->input('is_recurring'),
        ]);
    
        // Redirect naar de trainingspagina
        return redirect()->route('trainings.index');
    }
    public function edit($id)
    {
        $training = Training::findOrFail($id); // Fetch the training by ID
        $instructors = User::where('is_instructor', true)->get(); // Fetch all instructors
    
        // dd($training); // Debug the training object
    
        return view('training.edit', compact('training', 'instructors'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'user_id' => 'required|exists:users,id',
            'difficulty' => 'required|string',
            'capacity' => 'required|integer|min:1',
            'is_recurring' => 'required|in:not recurring,2x per week,1x per week,monthly',
        ]);
    
        // Find the training by ID
        $training = Training::findOrFail($id);
    
        // Update the training with the validated data
        $training->update($request->all());
    
        // Redirect back to the index page with a success message
        return redirect()->route('trainings.index')->with('success', 'Training updated successfully.');
    }

}