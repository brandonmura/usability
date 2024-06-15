<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function submit(FormRequest $request)
    {
        // Handle form submission
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
