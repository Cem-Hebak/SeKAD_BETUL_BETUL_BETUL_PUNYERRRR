<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'mobilenumber' => 'required|string',
            'emergencymobilenumber' => 'required|string',
            'role' => 'required|string',
            'ic_number' => 'required|string|unique:users',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'address' => 'required|string',
            'fname' => 'required|string',
            'fcontact' => 'required|string',
            'foccupation' => 'required|string',
            'mname' => 'required|string',
            'mcontact' => 'required|string',
            'moccupation' => 'required|string',
            'gname' => 'required|string',
            'gcontact' => 'required|string',
            'goccupation' => 'required|string',
            'blood_type' => 'required|string',
            'allergies' => 'required|string',
        ]);

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validatedData['avatar'] = $avatarPath;
        }

        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        return redirect('/register')->with('success', 'Registration successful!');
    }
}
