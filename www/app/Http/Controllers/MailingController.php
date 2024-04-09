<?php

namespace App\Http\Controllers;

use App\Models\Mailing;

class MailingController extends Controller
{
    /** @var string  */
    const ROUTE_MAILING = 'mailing';

    /** @var string  */
    const ROUTE_ADD_MAILING = 'addMailing';

    /**
     * Mailing
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function mailing()
    {
        $obMailing = (new Mailing())
            ->get()
        ;

        return view('mailing.mailing', [
                'mailings' => $obMailing,
            ]
        );
    }

    /**
     * Add mailing
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function addMailing()
    {
        return view('mailing.addMailing');
    }
}
