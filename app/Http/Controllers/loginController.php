<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );
        if (Auth::attempt($user)) {
            return redirect('login/successlogin');
        } else {
            $request->flash();
            return back()->with('error', 'Login fail');
        }
    }
    public function successlogin()
    {
        return view('successlogin');
    }
    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
