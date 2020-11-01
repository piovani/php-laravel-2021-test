<?php

namespace App\Services\Client;

use App\Services\Csv\ImportCsvService;

class ImportClientCsvService
{
    public function __invoke($name = null)
    {
        $data = [];

        if (!empty($name)) {
            $data = call_user_func(new ImportCsvService(), $name);
        }

        if (empty($data)) {
            return;
        }

        foreach ($data as $item) {
            call_user_func(new ClientCreateService(), $item);
        }
    }
}
