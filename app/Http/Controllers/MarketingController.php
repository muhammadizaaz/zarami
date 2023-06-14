<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketingController extends Controller
{
    public function index()
    {
        $marketings = Marketing::all();
        return view('marketings.index', compact('marketings'));
    }

    public function create()
    {
        if (Auth::user()->hasRole('manager')) {
            return view('marketing.create');
        } else {
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'total_item' => 'required',
            'status_id' => 'required|exists:statuses,id',
        ]);

        Marketing::create($request->all());

        return redirect()->route('marketing.index')->with('success', 'Marketing created successfully');
    }

    public function show(Marketing $marketing)
    {
        return view('marketing.show', compact('marketing'));
    }

    public function edit(Marketing $marketing)
    {
        if (Auth::user()->hasRole('manager')) {
            $marketings = Marketing::all();
            return view('marketing.edit', compact('marketing', 'statuses'))
        }
    }

    public function update(Request $request, Marketing $marketing)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'total_item' => 'required',
            'status_id' => 'required|exists:statuses,id',
        ]);

        $marketing->update($request->all());

        return redirect()->route('marketing.index')->with('success', 'Marketing updated successfully');
    }

    public function destroy(Marketing $marketing)
    {
        $marketing->delete();
        return redirect()->route('marketing.index')->with('success', 'Marketing deleted successfully');
    }
}
