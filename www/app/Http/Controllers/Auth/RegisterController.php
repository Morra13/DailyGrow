<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /** @var string  */
    const ROUTE_AUTH = 'auth';

    /** @var string  */
    const ROUTE_REGISTER = 'register';

    public function auth()
    {
        return view('auth.auth');
    }

    public function register()
    {
        return view('auth.register');
    }

}
