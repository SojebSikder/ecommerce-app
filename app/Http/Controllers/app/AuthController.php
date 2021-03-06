<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function profile_page()
    {
        return view('app/profile');
    }
    public function login_page()
    {
        return view('app/login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $remember = $request->input('remember');
        $fieldType = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Login with username or email and password
        if (Auth::attempt([$fieldType => $username, 'password' => $password, 'status' => 'allow'], $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            session([
                'username' => $user->username,
                'email' => $user->email
            ]);

            return redirect('/')->with('status', 'Logged in successfully');
        } else {
            return redirect('/login')->with('status', 'Login Error');
        }
    }

    public function register_page()
    {
        return view('app/register');
    }
    public function register(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');


        if ($username) {
            if (!User::where('username', '=', $username)->exists()) {
                $request->request->add(['username' => $username]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Username already teken. Please choose another  :('
                ], 201);
            }
        } else {
            return response()->json([
                'success' => false, 'message' => 'Username is required  :('
            ], 201);
        }
        if ($email) {
            if (!User::where('email', '=', $email)->exists()) {
                $request->request->add(['email' => $email]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Email already teken. Please choose another  :('
                ], 201);
            }
        } else {
            return response()->json([
                'success' => false, 'message' => 'Email is required  :('
            ], 201);
        }
        if (strlen($password) < 6) {
            return response()->json([
                'success' => false, 'message' => 'Password must be 6 digit length  :('
            ], 201);
        }

        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->status = "allow";
        $user->user_type = "user";

        $user->save();

        return redirect('/login')->with('status', 'Account created successfully');
        // return response()->json([
        //     'success' => true, 'message' => 'Account created successfully'
        // ], 200);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'Logged out successfully');
    }
}
