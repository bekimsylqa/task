<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // Assuming you want to display 10 users per page
        return view('dashboard')->with('users', $users);;
    }
}
