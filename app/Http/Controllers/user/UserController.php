<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Controller;
use App\Services\admin\AdminServices;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function dashboard()
    {
//        $data = new AdminServices();
//        $response = $data->sendVerificationEmail();
//        dd($response);
        return view('user.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
