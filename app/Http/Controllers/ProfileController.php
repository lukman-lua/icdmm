<?php

namespace App\Http\Controllers;

use App\Paper;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view(Request $request)
    {
        $profile = Profile::firstOrCreate([
            'username' => $request->user()->username,
        ]);

        return view('verification', [
                'profile' => $profile,
                'full_name' => $profile->full_name,
                'verify' => $profile->paper_id
            ]
        );
    }

    public function dashboardpeserta(Request $request)
    {

        $profile = Profile::firstOrCreate([
            'username' => $request->user()->username,
        ]);
        return view('dashboardpeserta', [
                'verify' => $profile->paper_id,
                'full_name' => $profile->full_name,
                'paper_code' => $request->user()->paper_code
            ]
        );
    }

    public function verify(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'institution' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'screenshot' => 'required|file',
            'registerAs' => 'required',
        ]);

        if ($validate){
            $profile = Profile::firstOrCreate([
                'username' => $request->user()->username,
            ]);

            $photo = $request->user()->username.'.' . $request->file('screenshot')->extension();

            if($profile->payment){
                \Illuminate\Support\Facades\File::delete($profile->payment);
            }
            $profile->payment = $request->file('screenshot')->storeAS('public/images/payments', $photo);

            $profile->full_name = $request->name;
            $profile->email = $request->email;
            $profile->institusi = $request->institution;
            $profile->country = $request->country;
            $profile->phone = $request->phone;
            $profile->register_as = $request->registerAs;

            $profile->save();

            return redirect()
                ->route("verification")
                ->with([
                    'status'=>'true',
                    'message'=>'Data has been saved',
                ]);

        }
        return redirect()->route('verification')->with([
            'status'=>'Falied',
            'message'=>'Data failed, please try again',
        ]);
    }
}
