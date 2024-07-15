<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function register(Request $request){
       $request->validate([
           'name' => 'required|string|max:255',
           'surname' => 'required|string|max:255',
           'email' => 'required|string|email|unique:users|max:255',
           'password' => 'required|string|max:255',
       ], []);

       $user = new User();
       $user->name = $request->name;
       $user->surname = $request->surname;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();

       Auth::login($user);

       // Save name sesion
       session(["name" => $request->name]);

       return redirect(route("home.index"));

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
            $user = User::where('email', $request->email)->first();
            // Save name sesion
            session(["name" => $user->name]);

            // Aquí se puede mandar al usuario a páginas privadas
            return redirect()->intended(route("home.index"));
        }
        return redirect()->route("login")->with('error', 'Credenciales no válidas');


    }

    public function logout(Request $request){
        Auth::logout();
        // Estudiar estos dos metodos
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));

    }


}
