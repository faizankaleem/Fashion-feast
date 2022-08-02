<?php

namespace App\Services\admin;

use App\Mail\TestMail;
use App\Models\User;
use Nexmo\Laravel\Facade\Nexmo;


class AdminServices
{
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
