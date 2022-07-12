<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Library::all();
        return view('index', compact('books'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Library::create($request->all());
        $success = "Data inserted successfully";
        return redirect()->route('book')->with('success', $success);

    }

    public function show(Library $library){
        return view('show',  compact('library'));
    }

    public function edit(Library $library){
        return view('edit',  compact('library'));
    }

    public function update(Request $request,Library $library){

        $library->update($request->all());
        $success = "Data updated successfully";
        return redirect()->route('book')->with('success', $success);
    }

    public function destroy(Library $library)
    {
        $library->delete();
        $success = "Data deleted successfully";
        return redirect()->route('book')->with('success', $success);

    }
}
