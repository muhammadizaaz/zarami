<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function index()
     {
          if (Auth::user()->hasRole('student')) {
               return view('student.dashboard');
          } elseif (Auth::user()->hasRole('lecturer')) {
               return view('lecturer.dashboard');
          }
     }

     public function edit(Request $request)
     {
          if (Auth::user()->hasRole('student')) {
               $user = User::find($request->id);
               return view('student.profile', compact('user'));
          } elseif (Auth::user()->hasRole('lecturer')) {
               $user = User::find($request->id);
               return view('lecturer.profile', compact('user'));
          }
     }

     public function update(Request $request, $id)
     {

          $user = User::find($id);
          $user->name = $request->name;
          $user->email = $request->email;
          $user->nim = $request->nim;
          $user->major = $request->major;
          $user->number = $request->number;
          $user->update();

          return redirect()->back();
     }
}
