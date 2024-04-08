<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package App\Models
 *
 * @property int id
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property string name
 * @property string phone
 * @property string email
 * @property carbon birthday
 */
class Client extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'phone',
            'birthday',
        ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    const TABLE  = 'clients';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = self::TABLE;
}
