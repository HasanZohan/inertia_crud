<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\User;

class VueController extends Controller
{
    public function show(User $user)
    {
        return Inertia::render('home', [
          'user' => 'John Doe'
        ]);
    }

    public function users(User $user)
    {
        return Inertia::render('users', [
          'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
        User::create($request->validate([
          'first_name' => ['required', 'max:50'],
          'last_name' => ['required', 'max:50'],
          'email' => ['required', 'max:50', 'email'],
        ]));

        return to_route('users');
        // return redirect()->route('home');
    }
}
