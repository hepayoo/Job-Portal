<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres = Auth::user()->offres; 
        return view('company.offres.index', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.offres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'img' => 'required|string',
        ]);

        $data['company_id'] = Auth::id(); // Associate the offre with the logged-in company

        Offre::create($data);

        return redirect()->route('company.offres.index')->with('success', 'Offre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        // Ensure the company owns the offre
        if ($offre->company_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('company.offres.show', compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        // Ensure the company owns the offre
        if ($offre->company_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('company.offres.edit', compact('offre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offre $offre)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'img' => 'required|string',
        ]);

        $offre->update($data);

        return redirect()->route('company.offres.index')->with('success', 'Offre updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        // Ensure the company owns the offre
        if ($offre->company_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $offre->delete();

        return redirect()->route('company.offres.index')->with('success', 'Offre deleted successfully.');
    }
}

