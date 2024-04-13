<?php

namespace App\Console;

use App\Http\Controllers\Api\SmsController;
use App\Models\Client;
use App\Models\Sms;
use App\Models\Mailing;

class ConsoleSendSms
{
    /**
     * Sms send
     *
     * @return void
     */
    public function __invoke()
    {
        $obMailing = new Mailing();
        $arMailing = $obMailing
            ->where('status', 'works')
            ->where('start_mailing', 'regularly')
            ->where('hour', (int)date('H'))
            ->where('minute', (int)date('i'))
            ->get()
        ;
        foreach ($arMailing as $mailing) {
            $obSms = (new Sms())
                ->where('mailing_id', $mailing->id)
                ->where('status', 'works')
                ->where('date_to_send', date('Y-m-d'))
                ->get();
            foreach ($obSms as $sms) {
                $phone = (new Client())->where('id', $sms->client_id)->first()->phone;
                (new SmsController())->sendSms($sms->id, $phone, $mailing->text);
                $sms->status = 'finish';
                $sms->status_send = 'sent';
                $sms->date_send = date('Y-m-d');
                $sms->update();
            }
        }
    }
}
