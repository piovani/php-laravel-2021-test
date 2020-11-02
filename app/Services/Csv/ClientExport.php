<?php

namespace App\Services\Csv;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientExport implements FromCollection
{
    public function collection()
    {
        return Client::all();
    }
}
