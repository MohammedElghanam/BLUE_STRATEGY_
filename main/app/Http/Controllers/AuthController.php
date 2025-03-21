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

    public function create(){
        return view('register');
    }

    public function register(Request $request){
        
        // dd($request);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255||unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $users_count = User::count();

        if ($users_count == 0) {
            $role = "ADMIN";
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $role,
            ]);

            if ($user) {
                return view('login');
            }else {
                
                return redirect()->back()->with(['error' => 'error in backlogdoge.']);
            }

        } else {
            return abort(500);
        }
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
        
        if (!Auth::check()) {
            if(Auth::attempt($data)){

                return redirect()->route('dashboard');
                
            }else {
                return redirect()->back()->with(['error' => 'Invalid credentials. Please try again.']);
            }
        } else {
            abort(200);
        }
        
    }

    public function logout(){
        
        Auth::logout();
        return redirect()->route('home');
    }
    
}


