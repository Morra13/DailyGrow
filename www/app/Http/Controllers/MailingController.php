<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use App\Models\MailingSegment;

class MailingController extends Controller
{
    /** @var string  */
    const ROUTE_MAILING = 'mailing';

    /** @var string  */
    const ROUTE_ADD_MAILING = 'addMailing';

    /** @var string  */
    const ROUTE_ADD_SEGMENT = 'addSegment';

    /**
     * Mailing
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function mailing()
    {
        $arMailings = (new Mailing())->all();
        foreach ($arMailings as $mailing) {
            if ($mailing->segment_id) {
                $mailing->segment_name = (new MailingSegment())->where('id', $mailing->segment_id)->get('name')[0]->name;
            }
        }

        return view('mailing.mailing', [
                'mailings' => $arMailings,
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
        return view('mailing.addMailing', [
                'segments' => (new MailingSegment())->all(),
            ]
        );
    }

    /**
     * Add segment
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function addSegment()
    {
        return view('mailing.addSegment');
    }
}
