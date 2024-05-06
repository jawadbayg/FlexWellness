<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $response = Response::all();
        return view('our-team.index', compact('response'));
    }

    public function create()
    {
        return view('our-team.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'feedback' => 'required',
            'email' => 'required|email',
            
        ]);

        Response::create($validatedData);

        return redirect()->route('our-team.index')->with('success', 'Memeber added successfully.');
    }

    public function edit(Response $response)
    {
        return view('our-team.edit', compact('response'));
    }

    public function update(Request $request, Response $response)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'feedback' => 'required',
            'email' => 'required|email',
            
        ]);

        $response->update($validatedData);

        return redirect()->route('our-team.index')->with('success', 'Member updated successfully.');
    }

    public function destroy(Response $response)
    {
        $response->delete();

        return redirect()->route('our-team.index')->with('success', 'Member deleted successfully.');
    }
}