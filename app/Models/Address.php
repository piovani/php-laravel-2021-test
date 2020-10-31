<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Address
 * @package App\Models
 *
 * @property string $id
 * @property string $street
 * @property string $number
 * @property string $complement
 * @property string $neighborhood
 * @property string $zip_code
 * @property string $city
 * @property string $latitude
 * @property string $longitude
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Address extends \Domain
{
    protected $fillable = [
        'id',
        'street',
        'number',
        'complement',
        'neighborhood',
        'zip_code',
        'city',
        'latitude',
        'longitude',
    ];
}
