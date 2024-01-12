<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create(){
        return inertia('Auth/Login');
    }

    public function store(Request $request){

      if( !Auth::attempt( $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|required'
        ]) , true)) {

            throw ValidationException::withMessages([
                'name' => 'The username you have provided is invalid.'
            ]);
        }

        $request->session()->regenerate();

        return redirect('/project');
    }

    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
