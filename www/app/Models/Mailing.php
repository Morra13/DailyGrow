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
 * @property string when now
 * @property string how_often daily
 * @property int hour
 * @property int minute
 * @property string type birthday
 * @property string segment segment
 * @property int sent
 * @property int delivered
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
}
