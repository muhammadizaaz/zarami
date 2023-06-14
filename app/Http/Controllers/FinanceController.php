<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index()
    {
        $finance = Finance::all();
        return view('finance.index', compact('finance'));
    }

    public function create()
    {
        if (Auth::user()->hasRole('manager')) {
            return view('finanace.create');
        } else {
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'quantity' => 'required|integer',
            'income' => 'required',
            'outcome' => 'required',
        ]);

        Finance::create($request->all());

        return redirect()->route('finance.index')->with('success', 'Finance created successfully');
    }

    public function show(Finance $finance)
    {
        return view('finance.show', compact('finance'));
    }

    public function edit(Finance $finance)
    {
        if (Auth::user()->hasRole('manager')) {
            $finances = Finance::all();
            return view('finance.edit', compact('finance', 'statuses'));
        } else {
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }

    public function update(Request $request, Finance $finance)
    {
        $request->validate([
            'description' => 'required',
            'quantity' => 'required|integer',
            'income' => 'required',
            'outcome' => 'required',
        ]);

        $finance->update($request->all());

        return redirect()->route('finance.index')->with('success', 'Finance updated successfully');
    }

    public function destroy(Finance $finance)
    {
        $finance->delete();
        return redirect()->route('finance.index')->with('success', 'Finance deleted successfully');
    }
}
