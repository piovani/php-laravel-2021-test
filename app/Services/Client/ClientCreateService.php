<?php

namespace App\Services\Client;

use App\Models\Address;
use App\Models\Client;
use App\Services\Address\AddressCreateService;
use Illuminate\Support\Facades\DB;

class ClientCreateService
{
    public function __invoke(array $data): Client
    {
        $client = null;

        DB::transaction(function () use (&$client, $data) {
            $dataTranslated = $this->translate($data);

            /** @var Address $address */
            $address = call_user_func(new AddressCreateService(), $data['endereco']);

            $dataTranslated['address_id'] = $address->id;

            $client = $this->saveClient($dataTranslated);
        });

        return $client;
    }

    private function saveClient(array $data): Client
    {
        return Client::updateOrCreate([
            'cpf' => $data['cpf'],
        ], $data);
    }

    private function translate(array $data): array
    {
        return [
            'name' => $data['nome'],
            'email' => $data['email'],
            'date_birth' => $data['datanasc'],
            'cpf' => $data['cpf'],
        ];
    }
}
