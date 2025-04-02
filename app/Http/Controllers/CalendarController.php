<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class CalendarController extends Controller
{
    public function index()
    {
        // Define the start and end of the current month
        $startOfMonth = now()->startOfMonth();
        $endOfMonth = now()->endOfMonth();

        // Fetch all training sessions within the month
        $trainings = Training::whereBetween('start_date', [$startOfMonth, $endOfMonth])->get();

        // Group training sessions by date
        $trainingsByDate = $trainings->groupBy(function ($training) {
            return date('Y-m-d', strtotime($training->start_date));
        });

        // Pass data to the view
        return view('calendar.index', compact('startOfMonth', 'endOfMonth', 'trainingsByDate'));
    }
}
