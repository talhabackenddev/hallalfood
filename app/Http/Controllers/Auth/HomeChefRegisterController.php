<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Address;
use App\Models\ChefRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeChefRegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password_confirmation' => ['required', 'string', 'min:8'],
            'password' => 'min:8|required|same:password_confirmation',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->postCode = $request->postCode;
        $user->phone = $request->telephone;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->refCode = $request->refCode;
        $user->refBy = $request->refBy;
        $user->cuisine = $request->cuisine;
        $user->certificate = $request->certificate;
        $user->role = 'chef';
        $user->save();

        Address::create([
            'user_id' => $user->id,
            'address' => '',
            'city' => $request->city,
            'country' => '',
            'postal_code' => $request->postCode,
            'phone' => $request->telephone,
            'type' => '',
            'lat' => '',
            'lng' => '',
        ]);

        return redirect()->route('login');
    }
    public function create()
    {
        return view('frontend/homeChef');
    }
    public function edit()
    {
        $data = User::find(Auth::id());
        return view('backend/myProfile', compact('data'));
    }

    public function update(Request $request)
    {
   
        $data = User::find($request->profile_id);

        if (isset($request->image) && !empty($request->image)) {
            if (!empty($data->image)) {
                Storage::disk('public')->delete($data->image);
            }

            $fileName  = Storage::disk('public')->put('upload/', $request->image);
        } else {
            $fileName  = $data->image;
        }
        $data->update([
            $data->aboutMe = $request->aboutMe,
            $data->avatar = $fileName,
            $data->facebook = @$request->facebook,
            $data->insta = @$request->insta,
            $data->cuisine = $request->cuisine,
        ]);
        return redirect()->back()
        ->with('message', 'Profile Updated successfully.');

    }
}
