<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mailing
 * @package App\Models
 *
 * @property int id
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property string name
 * @property string text
 * @property object client_id
 * @property string status works|stopped|finished
 * @property string start_mailing now|automatic|regularly
 * @property string when daily|now
 * @property int hour
 * @property int minute
 * @property int segment_id
 */
class Mailing extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    const TABLE  = 'mailings';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * Get sms sent statistic
     *
     * @param $dateFrom
     * @param $dateTo
     * @return mixed
     */
    public function getStatisticsByDate($dateFrom = null, $dateTo = null)
    {
        $arMailing = (new Mailing())->get();
        foreach ($arMailing as $mailing) {
            $obSms = new Sms();
            $obSms->where('mailing_id', $mailing->id)->get()->all();
            $mailing->sent = $obSms
                ->where('mailing_id', $mailing->id)
                ->where('status_send', '!=', 'waiting')
                ->where('date_send', ">=", $dateFrom ?? $obSms->get()->min('date_send'))
                ->where('date_send', "<=", $dateTo ?? $obSms->get()->max('date_send'))
                ->count()
            ;
            $mailing->delivered = $obSms
                ->where('mailing_id', $mailing->id)
                ->where('status_send', 'delivered')
                ->where('date_send', ">=", $dateFrom ?? $obSms->get()->min('date_delivery'))
                ->where('date_send', "<=", $dateTo ?? $obSms->get()->max('date_delivery'))
                ->count()
            ;
        }

        return $arMailing;
    }
}
