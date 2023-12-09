<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function register(Request $request){
        // Validar los datos

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
