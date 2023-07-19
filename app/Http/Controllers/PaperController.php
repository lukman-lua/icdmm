<?php

namespace App\Http\Controllers;

use App\Code;
use App\Paper;
use App\Profile;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function view(Request $request)
    {
        $profile = Profile::firstOrCreate([
            'username' => $request->user()->username,
        ]);

        return view('submitpaper', [
                'full_name' => $profile->full_name,
            ]
        );
    }

    public function submit(Request $request)
    {
        $validate = $request->validate([
            'fullName' => 'required',
            'paperTitle' => 'required',
            'email' => 'required',
            'coAuthorsEmail' => 'required',
            'institution' => 'required',
            'officeAddress' => 'required',
            'researchArea' => 'required',
            'fileUpload' => 'required|file',
        ]);

        if ($validate){

            $paper = Paper::create([
                'username' => $request->user()->username,
            ]);

            $user_paper = $request->user()->paper_code;

            if ($user_paper){
                $code = $user_paper;
            } else {
                $code_paper = Code::where('researchArea', $request->researchArea)->first();
                $user = $request->user();
                $code = $code_paper->code;
                $user->paper_code = $code;
                $user->save();
                $code_paper->code = $code + 1;
                $code_paper->save();
            }

            // Mendapatkan waktu sekarang
            $currentTime = Carbon::now();

            // Mengubah waktu menjadi string
            $currentTimeString = $currentTime->toDateTimeString();

            $currentTimeString = str_replace(array('-', ':'), '_', $currentTimeString);

            $photo = $request->user()->username.'_'. $currentTimeString .'.' . $request->file('fileUpload')->extension();

            if($paper->paper_file){
                \Illuminate\Support\Facades\File::delete($paper->paper_file);
            }
            $paper->paper_file = $request->file('fileUpload')->storeAS('public/images/paper', $photo);

            $paper->full_name = $request->fullName;
            $paper->tittle = $request->paperTitle;
            $paper->email = $request->email;
            $paper->co_authors_email = $request->coAuthorsEmail;
            $paper->institusi = $request->institution;
            $paper->office_adress = $request->officeAddress;
            $paper->research_area = $request->researchArea;
            $paper->paper_code = $code;

            $paper->save();

            return redirect()
                ->route("submitpaper")
                ->with([
                    'status'=>'true',
                    'message'=>'Submit paper success',
                ]);
        }

        return redirect()->route('submitpaper')->with([
            'status'=>'Falied',
            'message'=>'Submit paper failed, please try again',
        ]);
    }
}
