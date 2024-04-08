<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_ANALYTICS = 'analytics';

    /** @var string  */
    const ROUTE_CLIENTS = 'clients';

    /** @var string  */
    const ROUTE_MAILING = 'mailing';

    /**
     * Analytics
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function analytics()
    {
        return view('analytics.analytics');
    }

    /**
     * Clients
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function clients()
    {
        return view('clients.clients');
    }

    /**
     * Mailing
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function mailing()
    {
        return view('mailing.mailing');
    }
}
