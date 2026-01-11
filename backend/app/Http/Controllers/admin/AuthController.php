<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()
            ], 400);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::find(Auth::user()->id);

            if ($user->role == 'admin') {
                $token = $user->createToken('token')->plainTextToken;
                return response()->json([
                    'status' => 200,
                    'token' => $token,
                    'user_id' => $user->id,
                    'name' => $user->name,
                ], 200);
            } else {
                return response()->json([
                    'status' => 401,
                    'errors' => 'You are not authorized to access this page.'
                ], 401);
            }

        } else {
            return response()->json([
                'status' => 401,
                'errors' => 'Either email or password is incorrect'
            ], 401);
        }
    }
}
