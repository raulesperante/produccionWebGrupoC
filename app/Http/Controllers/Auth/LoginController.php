<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|max:255',
        ], []);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect(route("privada"));

    }

    public function login(Request $request){
        // Validacion
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);
        
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended(route("privada"));
        }
        return redirect(route("login"));

    }

    public function logout(Request $request){
        Auth::logout();
        // Estudiar estos dos metodos
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));

    }


}
