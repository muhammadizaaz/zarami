<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductionController extends Controller
{
    public function index()
    {
        $productions = Production::all();
        return view('productions.index', compact('productions'));
    }

    public function create()
    {
        if (Auth::user()->hasRole('manager')) {
            return view('productions.create');
        } else {
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'status_id' => 'required|exists:statuses,id',
        ]);

        Production::create($request->all());

        return redirect()->route('productions.index')->with('success', 'Production created successfully');
    }

    public function show(Production $production)
    {
        return view('productions.show', compact('production'));
    }

    public function edit(Production $production)
    {
        if (Auth::user()->hasRole('manager')) {
            $productions = Production::all();
            return view('production.edit', compact('marketing', 'statuses'));
        } else {
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }

    public function update(Request $request, Production $production)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'status_id' => 'required|exists:statuses,id',
        ]);

        $production->update($request->all());

        return redirect()->route('productions.index')->with('success', 'Production updated successfully');
    }

    public function destroy(Production $production)
    {
        $production->delete();
        return redirect()->route('productions.index')->with('success', 'Production deleted successfully');
    }
}
