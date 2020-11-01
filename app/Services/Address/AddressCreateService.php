<?php

namespace App\Services\Address;

use App\Infrastructure\Google\GoogleMapsSearch;
use App\Models\Address;

class AddressCreateService
{
    public function __invoke(string $addressString): Address
    {
        $googleService = new GoogleMapsSearch();
        $data = $googleService->searchAddress($addressString);

        return Address::updateOrCreate($data, $data);
    }
}
