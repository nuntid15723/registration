<?php

namespace App\Http\Controllers;

use App\Models\SeminarSession;
use Illuminate\Http\Request;

class SeminarSessionController extends Controller
{
    public function index()
    {
        $sessions = SeminarSession::all();
        return view('seminar_sessions.index', compact('sessions'));
    }

    public function create()
    {
        return view('seminar_sessions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'session_date' => 'required|date',
            'session_name' => 'required|string',
            'fee_member' => 'required|numeric',
            'fee_non_member' => 'required|numeric',
            'fee_student' => 'required|numeric',
        ]);

        SeminarSession::create($validatedData);

        return redirect()->route('seminar_sessions.index')->with('success', 'Seminar session created successfully.');
    }

    public function edit(SeminarSession $session)
    {
        return view('seminar_sessions.edit', compact('session'));
    }

    public function update(Request $request, SeminarSession $session)
    {
        $validatedData = $request->validate([
            'session_date' => 'required|date',
            'session_name' => 'required|string',
            'fee_member' => 'required|numeric',
            'fee_non_member' => 'required|numeric',
            'fee_student' => 'required|numeric',
        ]);

        $session->update($validatedData);

        return redirect()->route('seminar_sessions.index')->with('success', 'Seminar session updated successfully.');
    }

    public function destroy(SeminarSession $session)
    {
        $session->delete();

        return redirect()->route('seminar_sessions.index')->with('success', 'Seminar session deleted successfully.');
    }
}
