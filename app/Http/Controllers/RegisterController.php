<?php

namespace App\Http\Controllers;
use App\Http\Requests\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['role_id'] = 2;
        if (Auth::attempt($credentials,true)) {
            $request->session()->regenerate();
            $request->session()->flash('success', 'Logged In successfully!');
            return view('welcome');
        }   
        return back();
    }
    public function store(Register $request){
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 2
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->flash('success', 'Account created successfully!');
            return view('welcome');
        }
        return back();
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerateToken();
        return view('register');
    }
}
