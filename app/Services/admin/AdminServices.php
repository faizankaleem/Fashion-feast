<?php

namespace App\Services\admin;

use App\Mail\TestMail;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Nexmo\Laravel\Facade\Nexmo;


class AdminServices
{

    public function loginAuth($request)
    {
        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function sendVerificationEmail()
    {

        $user = User::latest()->first();
        $email = $user->email;
        $detail = [
            'title' => 'Verification Email',
            'body' => 'Verification Link is send to your email address kindly verify your account to shop with fashion feast',
            'id' => $user->id,
            'flag' => '0',
            ];
        \Mail::to($email)->send(new TestMail($detail));

        return "Mail Send";

    }

    public function changeStatus($id)
    {
        dd($id);
    }


}
