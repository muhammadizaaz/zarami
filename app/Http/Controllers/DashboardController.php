<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function index()
     {
          if (Auth::user()->hasRole('staff')) {
               return view('staff.dashboard');
          } elseif (Auth::user()->hasRole('manager')) {
               return view('manager.dashboard');
          } elseif (Auth::user()->hasRole('admin')) {
               return view('admin.dashboard');
          }
     }

     public function create()
     {
          if (Auth::user()->hasRole('admin')) {
               return view('admin.create');
          } else {
               return redirect()->back()->with('error', 'Unauthorized access');
          }
     }

     public function edit(Request $request)
     {
          if (Auth::user()->hasRole('staff')) {
               $user = User::find($request->id);
               return view('staff.profile', compact('user'));
          } elseif (Auth::user()->hasRole('manager')) {
               $user = User::find($request->id);
               return view('manager.profile', compact('user'));
          } elseif (Auth::user()->hasRole('admin')) {
               $user = User::find($request->id);
               return view('admin.profile', compact('user'));
          }
     }

     public function update(Request $request, $id)
     {

          $user = User::find($id);
          $user->name = $request->name;
          $user->email = $request->email;
          $user->update();

          return redirect()->back();
     }
     
     public function destroy(User $user)
     {
          if (Auth::user()->hasRole('admin')) {
               $user->delete();
               return redirect()->route('admin.users.index')
                    ->with('success', 'User deleted successfully');
          } else {
               return redirect()->back()->with('error', 'Unauthorized access');
          }
          
     }
}
