<?php

namespace App\Http\Controllers;
use App\Models\MembershipModel;
use Illuminate\Http\Request;
use App\Http\Controllers\MembershipController;
class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membershipInputs=MembershipModel::all();
        return view ('home')->with('membershipInputs', $membershipInputs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data= $request->all();
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'comment' => 'required',
        // ]);

        MembershipModel::create($data);

        // return redirect('home')->with('success', 'Added successfully.');
        return redirect()->route('home')->with('success', 'Added successfully.');

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
