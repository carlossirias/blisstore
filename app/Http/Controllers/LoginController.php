<?php
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    
    public function create(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            // La autenticación fue exitosa
            return redirect()->intended('/home');
        } else {
            // La autenticación falló
            return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        }
        return redirect('/');   
    }
}
