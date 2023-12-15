<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'role' => 'required|in:admin,user',
            'phone' => 'required|string|unique:users,phone',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $validator->validated(); // Menggunakan data yang telah divalidasi
        $input['password'] = Hash::make($input['password']); // Menggunakan fungsi Hash untuk mengamankan password

        $user = User::create($input);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Sukses Register',
            'data' => [
                'user' => $user,
                'token' => $token,
            ],
        ], 201);
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Create token
            $token = $user->createToken('api-token')->plainTextToken;
            $csrf = csrf_token();

            // Return response with token
            return response()->json(['token' => $token, 'user' => $user], 200);
        }

        // Invalid credentials
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}