<?php

namespace App\Http\Controllers;

use App\Paper;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validation(Request $request)
    {
        return view('validation', [
                'user' => Profile::orderBy('id', 'desc')->get()
            ]
        );
    }

    public function val_acc($username)
    {
        $profile = Profile::where('username', $username)->first();
        $profile->paper_id = '1';
        $profile->save();
        $user = User::where('username', $username)->first();
        $user->user_verified = true;
        $user->save();

        return response()->json([
            'status' => 'ok',
            'paper_id' => '1',
        ])->setStatusCode(200);
    }

    public function val_dec(Request $request, $username)
    {
        $profile = Profile::where('username', $username)->first();
        $profile->paper_id = '0';
        $profile->save();
        $user = User::where('username', $username)->first();
        $user->user_verified = false;
        $user->save();

        return response()->json([
            'status' => 'ok',
            'paper_id' => '0',
        ])->setStatusCode(200);
    }

    public function alluser(Request $request)
    {
        return view('alluser', [
                'users' => Profile::orderBy('id', 'desc')->get()
            ]
        );
    }

    public function paper(Request $request)
    {
        return view('paperin', [
                'paper' => Paper::orderBy('id', 'desc')->get()
            ]
        );
    }

}
