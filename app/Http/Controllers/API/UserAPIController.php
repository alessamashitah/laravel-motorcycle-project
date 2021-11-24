<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAPIController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'message' => 'successful fetch all users',
            'data' => $users
        ]);
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json([
            'success' => true,
            'message' => 'succesful register new users',
            'data' => $user
        ]);
    }
    
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json([
            'success' => true,
            'message' => 'succesful update users',
            'data' => $user
        ]);
    }

    public function show(User $user)
    {
        return response()->json([
            'success' => true,
            'message' => 'succesful show user',
            'data' => $user
        ]);
    }
}
