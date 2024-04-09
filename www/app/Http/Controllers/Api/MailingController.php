<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Mailing;
use App\Models\MailingSegment;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    /** @var string  */
    const ROUTE_ADD_MAILING = 'api.addMailing';

    /** @var string  */
    const ROUTE_ADD_SEGMENT = 'api.addSegment';

    /** @var string  */
    const ROUTE_CHANGE_MAILING_STATUS = 'api.changeMailingStatus';

    /**
     * Add new mailing
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addMailing(Request $request)
    {
        $obMailing = new Mailing();

        if ($request->get('client_id') == 'all') {
            $obClients = new Client();
            $arClients = $obClients->get('id');
            foreach ($arClients as $value) {
                $arClientId [] = $value->id;
            }
            $jsonClientId = json_encode($arClientId);
        }

        $obMailing->name            = $request->get('name');
        $obMailing->text            = $request->get('text');
        $obMailing->client_id       = $jsonClientId;
        $obMailing->start_mailing   = $request->get('start_mailing');
        if ($request->get('start_mailing') != 'now') {
            $obMailing->when            = $request->get('when');
            $obMailing->hour            = substr($request->get('time'), 0, 2);
            $obMailing->minute          = substr($request->get('time'), 3, 2);
            $obMailing->segment_id      = $request->get('segment_id');
        }

        $obMailing->save();

        return redirect()->route(\App\Http\Controllers\MailingController::ROUTE_MAILING);
    }

    /**
     * Change mailing status
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeMailingStatus($id)
    {
        $obMailing = (new Mailing())
            ->where('id', $id)
            ->first()
        ;

        if ($obMailing->status == 'works') {
            $obMailing->status = 'stopped';
        } elseif ($obMailing->status == 'stopped') {
            $obMailing->status = 'works';
        }

        $obMailing->update();

        return redirect()->route(\App\Http\Controllers\MailingController::ROUTE_MAILING);
    }

    /**
     * Add segment
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addSegment(Request $request) {
        $obSegment = new MailingSegment();

        $obSegment->name = $request->get('name');
        $obSegment->days = $request->get('days');
        $obSegment->save();

        return redirect()->route(\App\Http\Controllers\MailingController::ROUTE_MAILING);
    }
}
