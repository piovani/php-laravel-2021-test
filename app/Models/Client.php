<?php

namespace App\Models;

use App\Models\Shared\Domain;
use Carbon\Carbon;

/**
 * Class Client
 * @package App\Models
 *
 * @property string $id
 * @property string $address_id
 * @property string $name
 * @property string $email
 * @property Carbon $date_birth
 * @property string $cpf
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Client extends Domain
{
    protected $fillable = [
        'id',
        'address_id',
        'name',
        'email',
        'date_birth',
        'cpf',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
