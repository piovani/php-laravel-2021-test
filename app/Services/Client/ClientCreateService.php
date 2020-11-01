<?php

namespace App\Services\Client;

use App\Models\Client;

class ClientCreateService
{
    public function __invoke(array $data): Client
    {
        $dataTranslated = $this->translate($data);

        return Client::create($dataTranslated);
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
