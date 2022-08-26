<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\admin\AdminServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct(AdminServices $adminServices)
    {
        $this->service = $adminServices;
    }

    public function login()
    {
        return view('admin.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin-login');
    }

    public function loginAuth(LoginRequest $request)
    {
        $response = $this->service->loginAuth($request);
        if($response == 0)
        {
            return redirect()->back()->with(['message' => trans('translations.invalid_credentials')]);
        }
        else
        {

            return redirect()->route('dashboard');
        }

    }
    public function dashboard()
    {
        return  view('admin.dashboard');

    }

    public function sendVerificationEmail()
    {
        $this->service->sendVerificationEmail();
    }

    public function sendOtpMessage()
    {
        $this->service->sendOtpMessage();
    }

    public function changeStatus()
    {

    }
}
