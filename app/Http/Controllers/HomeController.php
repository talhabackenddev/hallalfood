<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function show()
    {
        return view('auth.verify');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        switch (Auth::user()->role) {
            case 'chef':
                return view('backend.dashboard');
            case 'customer':
                return view('home');
            case 'admin':
                return view('admin.dashboard');
        }
     
    }
    public function changePassword()
    {
        return view('auth.passwords.reset');
    }
    public function change(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->back()
        ->with('success', 'Password Change Successfully');
    }

    public function chefChangePassword()
    {
        return view('backend.reset');
    }
    public function chefChange(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->back()
            ->with('success', 'Password Change Successfully');
    }
    public function adminChangePassword()
    {
        return view('admin.reset');
    }
    public function adminChange(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->back()
            ->with('success', 'Password Change Successfully');
    }
}
