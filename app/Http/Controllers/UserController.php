<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:30',
            'confirm-password' => 'required|min:5|max:30',
        ]);

        if ($request->get('password') !== $request->get('confirm-password')){
            return redirect()
                ->route('regis')
                ->with([
                    'status'=> 'false',
                    'message' => 'Confirm Password is Wrong'
                ]);
        }
        if ($validate){
            $user = new User();
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();
            auth()->login($user);
            return redirect()
                ->route("dashboardpeserta")
                ->with([
                    'status'=>'true',
                    'message'=>'',
                ]);
        }
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $form_check = $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:30',
        ]);

        if (Auth::attempt($form_check)) {
            $request->session()->regenerate();
            return redirect()
                ->route('dashboardpeserta');
        }
        return redirect()->route('login')->with([
            'status'=>'Falied',
            'message'=>'Username or password is wrong',
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()
            ->route('home');
    }
}
