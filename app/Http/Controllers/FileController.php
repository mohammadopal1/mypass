<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    // Display all records
    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }

    // Show form to create a new record
    public function create()
    {
        return view('files.create');
    }

    // Store a new record
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'card_number' => 'required|string|max:16',
            'cvv' => 'required|string|max:3',
            'note' => 'nullable|string',
        ]);

        File::create($validatedData);

        return redirect()->route('files.index')->with('success', 'Record added successfully!');
    }

    // Show form to edit an existing record
    public function edit(File $file)
    {
        return view('files.edit', compact('file'));
    }

    // Update an existing record
    public function update(Request $request, File $file)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'card_number' => 'required|string|max:16',
            'cvv' => 'required|string|max:3',
            'note' => 'nullable|string',
        ]);

        $file->update($validatedData);

        return redirect()->route('files.index')->with('success', 'Record updated successfully!');
    }

    // Delete an existing record
    public function destroy(File $file)
    {
        $file->delete();

        return redirect()->route('files.index')->with('success', 'Record deleted successfully!');
    }
}
