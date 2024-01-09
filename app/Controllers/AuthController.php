<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function register_view()
    {
        echo view('layouts/main');
        echo view('auth/register_view');
    }

    public function login_view(){
        echo view('layouts/main');
        echo view('auth/login_view');
    }

    
}


