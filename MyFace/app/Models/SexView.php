<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для пользователя
 *
 * Class SexViews
 * @package App\Models
 *
 * @property int $id
 * @property int $userId
 * @property int $sexId
 */
class SexViews extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'sex_id',
    ];
}
