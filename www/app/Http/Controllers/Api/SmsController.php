<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Mailing;
use App\Models\MailingSegment;
use App\Models\Sms;
use App\Services\Sender;

class SmsController extends Controller
{
    /** @var string  */
    const ROUTE_CREATE_SMS = 'api.createSms';

    /** @var string  */
    const ROUTE_SEND_SMS = 'api.sendSms';

    /** @var string  */
    const ROUTE_UPDATE_SMS_STATUS = 'api.updateSmsStatus';

    /**
     * Create sms
     *
     * @return void
     * @throws \Exception
     */
    public function createSms(Mailing $obMailing = null)
    {

        $dateNow = new \DateTime(date('Y-m-d H:i'));

        foreach (json_decode($obMailing->client_id) as $clientId) {
            $obClient = (new Client())->where('id', $clientId)->first();
            if ($obMailing->start_mailing == 'regularly') {
                $dateBirthday = date('Y-m-d', strtotime(date('Y') . date('-m-d', strtotime($obClient->birthday))));
                $dateToSend = new \DateTime(date("$dateBirthday . $obMailing->hour:$obMailing->minute"));
                $iDay = (new MailingSegment())->where('id', $obMailing->segment_id)->first()->days;
                $diffDays = ceil((((strtotime($dateToSend->format('Y-m-d')) - strtotime($dateNow->format('Y-m-d')))/60)/60)/24);
                $diffSec = strtotime($dateToSend->format('H:i')) - strtotime($dateNow->format('H:i'));
                if ($diffSec > 0) {
                    $diffDays++;
                }
                $minusDays = (($diffDays < $iDay) ? $diffDays : $iDay) - 1;
                for ($i = 0; $i < (($diffDays < $iDay) ? $diffDays : $iDay); $i++) {
                    $obSms = new Sms();
                    $obSms->mailing_id = $obMailing->id;
                    $obSms->client_id = $clientId;
                    if ($i == 0) {
                        $obSms->date_to_send = $dateToSend->sub(new \DateInterval ("P".$minusDays."D"));
                    } else {
                        $obSms->date_to_send = $dateToSend->add(new \DateInterval ("P1D"));
                    }
                    $obSms->save();
                }
            } elseif ($obMailing->start_mailing == 'now') {
                $obSms = new Sms();
                $obSms->mailing_id = $obMailing->id;
                $obSms->client_id = $clientId;
                $obSms->status_send = 'sent';
                $obSms->save();
                $this->sendSms($obSms->id, $obClient->phone ,$obMailing->text);
            }
        }
    }

    /**
     * Send sms
     *
     * @param $smsId
     * @param $phone
     * @param $text
     * @return void
     */
    public function sendSms($smsId, $phone, $text) {
        include_once (realpath(app_path('Services/Sender/smscApi.php')));
        Sender\send_sms($phone, $text, '0','0', $smsId);
    }

    /**
     * Update sms status
     *
     * @return void
     */
    public function updateSmsStatus ()
    {
        include_once (realpath(app_path('Services/Sender/smscApi.php')));
        $obSms = (new Sms())->where('status_send', 'sent')->get();
        foreach ($obSms as $sms) {
            $phone = (new Client())->where('id', $sms->client_id)->first()->phone;
            list($status, $time) = Sender\get_status($sms->id, $phone);
            if ($status == "1") {
                $sms->status_send = 'delivered';
                $sms->date_delivery = date('Y-m-d H:i', $time);
                $sms->update();
            }
        }
    }

}
