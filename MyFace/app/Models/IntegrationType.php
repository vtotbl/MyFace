<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для типов интеграций
 *
 * Class IntegrationType
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class IntegrationType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
