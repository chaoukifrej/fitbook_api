<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $request->validate(
            [
                'firstname' => ['required', 'string', 'max:64'],
                'lastname' => ['required', 'string', 'max:64'],
                'email' => ['required', 'string', 'email', 'max:64', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );

        User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => Hash::maket($request['password']),
        ]);

        return response()->json(['success' => true], 200);
    }
}
