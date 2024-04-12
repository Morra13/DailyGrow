<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sms
 * @package App\Models
 *
 * @property int id
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property int mailing_id
 * @property int client_id
 * @property string status works|stopped|finished
 * @property string status_send waiting|sent|delivered
 * @property Carbon date_to_send
 * @property Carbon date_send
 * @property Carbon date_delivery
 */
class Sms extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    const TABLE  = 'sms';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = self::TABLE;
}
