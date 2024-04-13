<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_MAIN = 'main';

    /** @var string  */
    const ROUTE_AUTH = 'auth';

    /** @var string  */
    const ROUTE_REGISTER = 'register';

    /**
     * Main
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function main()
    {
        return view('main');
    }

    /**
     * Auth
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function auth()
    {
        return view('auth.auth');
    }

    /**
     * Register
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function register()
    {
        return view('auth.register');
    }
}
