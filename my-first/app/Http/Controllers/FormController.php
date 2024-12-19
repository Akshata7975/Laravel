<?php

// app/Http/Controllers/FormController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function create()
    { 
        return view('form');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);

        // Store the data in the database
        FormData::create($validatedData);

        // Redirect with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function index()
    {
        // Retrieve all stored data
        $formData = FormData::all();

        return view('form_data', ['formData' => $formData]);
    }
}

