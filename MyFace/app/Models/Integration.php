<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для интеграций
 *
 * Class Integration
 * @package App\Models
 *
 * @property int $id
 * @property int user_integration_id
 * @property int $user_id
 * @property int $type
 */
class Integration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_integration_id',
        'user_id',
        'type',
    ];
}
