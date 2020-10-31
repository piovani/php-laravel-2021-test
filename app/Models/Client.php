<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Client
 * @package App\Models
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property Carbon $date_birth
 * @property string $cpf
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Client extends \Domain
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'date_birth',
        'cpf',
    ];
}
