<?php

namespace App\Http\Controllers;

use App\Models\WorkshopSession;
use Illuminate\Http\Request;

class WorkshopSessionController extends Controller
{
    public function index()
    {
        // Retrieve all workshop sessions from the database
        $workshopSessions = WorkshopSession::all();

        // Pass the data to the view for displaying
        return view('workshop-session', compact('workshopSessions'));
    }

    public function create()
    {
        // Show the form for creating a new workshop session
        return view('workshop_sessions.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add more validation rules as needed
        ]);

        // Create a new workshop session in the database
        WorkshopSession::create($validatedData);

        // Redirect to the index page or show a success message
        return redirect('/workshop-sessions')->with('success', 'Workshop session created successfully.');
    }

    public function show($id)
    {
        // Retrieve the specific workshop session from the database
        $workshopSession = WorkshopSession::findOrFail($id);

        // Pass the data to the view for displaying
        return view('workshop_sessions.show', compact('workshopSession'));
    }

    public function edit($id)
    {
        // Retrieve the specific workshop session from the database
        $workshopSession = WorkshopSession::findOrFail($id);

        // Show the form for editing the workshop session
        return view('workshop_sessions.edit', compact('workshopSession'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add more validation rules as needed
        ]);

        // Find the workshop session and update its data in the database
        $workshopSession = WorkshopSession::findOrFail($id);
        $workshopSession->update($validatedData);

        // Redirect to the index page or show a success message
        return redirect('/workshop-sessions')->with('success', 'Workshop session updated successfully.');
    }

    public function destroy($id)
    {
        // Find the workshop session and delete it from the database
        $workshopSession = WorkshopSession::findOrFail($id);
        $workshopSession->delete();

        // Redirect to the index page or show a success message
        return redirect('/workshop-sessions')->with('success', 'Workshop session deleted successfully.');
    }

}
