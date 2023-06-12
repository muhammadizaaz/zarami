<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::latest()->paginate(5);
        return view('uploads.index', compact('uploads'));
    }

    public function create()
    {
        return view('uploads.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'cv' => 'required',
            'motivation_letter' => 'required',
            'khs' => 'required',
        ]);

        Upload::create($request->all());

        return redirect()->route('student.my-upload')
            ->with('success', 'Upload created successfully.');
    }

    public function update(Request $request, Upload $upload)
    {
        $request->validate([
            'user_id' => 'required',
            'cv' => 'required',
            'motivation_letter' => 'required',
            'khs' => 'required',
        ]);

        $upload->update($request->all());

        return redirect()->route('student.my-upload')
            ->with('success', 'Upload updated successfully');
    }

    public function destroy(Upload $upload)
    {
        $upload->delete();

        return redirect()->route('student.my-upload')
            ->with('success', 'Upload deleted successfully');
    }

}
