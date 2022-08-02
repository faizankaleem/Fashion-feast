<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\admin\AdminServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(AdminServices $adminServices)
    {
        $this->service = $adminServices;
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
