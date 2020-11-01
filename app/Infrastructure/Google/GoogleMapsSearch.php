<?php

namespace App\Infrastructure\Google;

use GuzzleHttp\Client;
use Matrix\Exception;

class GoogleMapsSearch
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'timeout' => 60.0,
            'base_uri' => env('GOOGLE_MAPS_URL'),
        ]);
    }

    public function searchAddress(string $address): ?array
    {
        $data = [];

        try {
            $response = $this->client->get('maps/api/geocode/json', ['query' => [
                'address' => $address,
                'key' => env('GOOGLE_API_KEY'),
            ]]);

            $body = json_decode($response->getBody()->getContents(), true);

            collect($body['results'][0]['address_components'])->each(function (array $item) use (&$data) {
                foreach ($item['types'] as $type) {
                    if ($type === 'street_number') {
                        $data['number'] = $item['long_name'];
                        break;
                    }

                    if ($type === 'route') {
                        $data['street'] = $item['long_name'];
                        break;
                    }

                    if ($type === 'sublocality_level_1') {
                        $data['neighborhood'] = $item['long_name'];
                        break;
                    }

                    if ($type === 'administrative_area_level_2') {
                        $data['city'] = $item['long_name'];
                        break;
                    }

                    if ($type === 'postal_code') {
                        $data['zip_code'] = $item['long_name'];
                        break;
                    }
                }
            });

            $data['latitude'] = $body['results'][0]['geometry']['location']['lat'];
            $data['longitude'] = $body['results'][0]['geometry']['location']['lng'];

        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }

        return $data;
    }
}
