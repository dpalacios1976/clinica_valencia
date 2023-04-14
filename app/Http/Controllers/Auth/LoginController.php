<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    /**
     * Displays the login
     * 
     * @return \Illuminate\Http\Response
     */
    public function index () 
    {
        if (Auth::check()) 
        {
            return redirect('home');
        }
        return view('login');
    }

    /**
     * Handles authentication.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required']
        ]);

        $remember = $request->remember;
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1], $remember)) 
        {
            $request->session()->regenerate();
            $user_id = auth()->user()->id;
            $fullname = auth()->user()->name;
            $rol_name = auth()->user()->roles->pluck('name')[0];

            $request->session()->put('user_id', $user_id);
            $request->session()->put('fullname', $fullname);
            $request->session()->put('rol_name', $rol_name);

            return redirect()->intended('home');
        }

        return redirect()
            ->back()
            ->with(['message_data' => 'Los datos ingresados no concuerdan con nuestros registros'])
            ->withInput($request->only('username', 'password'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
