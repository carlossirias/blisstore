<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Language;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class RegisterController extends Controller
{
    //

    public function view()
    {
        if(Auth::check()) return redirect('home');

        $languages = Language::all();
        return view('register', compact('languages'));
    }

    public function create(RegisterRequest $request)
    {

        $user = User::create($request->validated());

        Auth::login($user);
        return redirect(route('home.index'));
    }

    public function viewTermsConditions(){
        return view('terms_conditions');
    }
}
