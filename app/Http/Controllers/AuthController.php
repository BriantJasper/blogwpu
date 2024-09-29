<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;



class AuthController extends Controller {

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Username or Password is Invalid');

        // $validator = Validator::make($request->all(), [
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'invalid input data',
        //         'errors' => $validator->errors(),
        //     ], 422);
        // }

        // $credentials = request(['username', 'password']);
        // if (!Auth::attempt($credentials)) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'wrong username or password',
        //     ], 422);
        // }

        // $user = User::where('username', $request->username)->first();
        // $token = bcrypt($request->username);
        // $user->update([
        //     'token' => $token,
        // ]);

        // $request->session()->regenerate();

        // return redirect()->intended('/');


        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'item data',
        //     'token' => $token,
        // ], 200);
    }

    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'username' => 'required|unique:users',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'invalid input data',
        //         'errors' => $validator->errors(),
        //     ], 422);
        // }

        // return $request->all();

        $validatedData = $request->validate([
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:255',
        ]);

        // User::create([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);
        
        // $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'user registered successfully',
        // ], 201);

        // $request->session()->flash('success', 'Registration Successfull! Please login');
        
        return redirect()->intended('/login')->with('success', 'Registration Successful! Please login');
    }

    public function me(Request $request)
    {
        $user = User::where('token', $request->token)->first();

        return response()->json([
            'status' => 'success',
            'message' => 'item data',
            'data' => $user,
        ], 200);
    }


    public function logout(Request $request)
    {
        // $user = User::where('token', $request->token)->first();
        // $user->update([
        //     'token' => null,
        // ]);

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'item data',
        //     'data' => $user,
        // ], 200);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}