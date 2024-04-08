<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /** @var string  */
    const ROUTE_AUTH = 'api.auth';

    /** @var string  */
    const ROUTE_REGISTER = 'api.register';

    public function auth(Request $request)
    {
        dd($request);
    }

    public function register(Request $request)
    {
        dd($request);
    }
}
