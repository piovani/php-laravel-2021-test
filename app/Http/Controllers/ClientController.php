<?php

namespace App\Http\Controllers;

use App\Services\Csv\ClientExport;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    public function export()
    {
        return Excel::download(new ClientExport(),'clients.csv');
    }
}
