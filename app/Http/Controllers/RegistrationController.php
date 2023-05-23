<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required',
            'confirmed_mobile' => 'required|same:mobile',
            'email' => 'required|email',
            'confirmed_email' => 'required|email|same:email',
            'organization' => 'nullable',
            'organization_name' => 'nullable',
            'receipt_name' => 'required',
            'receipt_address' => 'required',
        ]);

        $registration = new Registration($validatedData);

        // Save the registration data to the database
        $registration->save();

        return redirect('/payment')->with('info', 'Registration submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
