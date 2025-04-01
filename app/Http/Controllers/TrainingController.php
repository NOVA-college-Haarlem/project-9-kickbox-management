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
        return view('training.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('training.index');
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
        return redirect()->route('training.index')->with('success', 'Training updated successfully.');
    }

}
