<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    /** @var string  */
    const ROUTE_ANALYTICS = 'analytics';

    /**
     * Analytics
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function analytics()
    {
        $arSent = [];
        $arDelivered = [];
        $obMailing = (new Mailing())->all();

        foreach ($obMailing as $value) {
            $arSent[] = $value->sent;
            $arDelivered[] = $value->delivered;
        }

        return view('analytics.analytics', [
                'mailings'  => $obMailing,
                'sent'      => array_sum($arSent),
                'delivered' => array_sum($arDelivered),
            ]
        );
    }
}
