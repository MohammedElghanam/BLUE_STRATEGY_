<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }


    public function register(Request $request){
        
        // dd($request);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255||unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        
        return 'nadi';
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        

        $data=[
            'email' => $request->email,
            'password'=> $request->password,
        ];
        
        if(Auth::attempt($data)){

            // $user = Auth::user();
            return redirect()->route('dashboard');
            // dd($user);
            
        }
    }

    public function logout(){
        
        Auth::logout();
        return redirect()->route('home');
    }
    
}


