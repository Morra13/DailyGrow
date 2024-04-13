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
    public function analytics(Request $request)
    {
        $dateFrom = $request->dateFrom;
        $dateTo = $request->dateTo;
        if ($request->period) {
            $dateFrom = date('Y-m-d', strtotime($request->period));
            $dateTo = date('Y-m-d');
        }

        $arMailing = (new Mailing())->getStatisticsByDate($dateFrom, $dateTo);
        foreach ($arMailing as $value) {
            $arSent[] = $value->sent;
            $arDelivered[] = $value->delivered;
        }

        return view('analytics.analytics', [
                'mailings'  => $arMailing,
                'sent'      => array_sum($arSent),
                'delivered' => array_sum($arDelivered),
            ]
        );
    }
}
