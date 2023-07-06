<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(Request $request)
    {
        $query = DB::select('SELECT email FROM users WHERE email = ?', [$request->email]);
        if($query) return back()->with("failed", "This email is already used :|");;

        $sql = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => $request->password
        ]);

        if($sql)
        {
            return back()->with("succesful", "Congratulations!");
        }
        else
        {
            return back()->with("failed", "You should verified each blank :|");
        }
    }
}
