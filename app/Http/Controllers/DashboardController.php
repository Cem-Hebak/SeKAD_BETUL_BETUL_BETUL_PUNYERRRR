<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve all users from MongoDB
        $users = User::all();

        // Pass the data to the dashboard view
        return view('dashboard', compact('users'));
    }
}
