<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Client\ImportClientCsvService;

class ReadCSV extends Command
{
    protected $signature = 'read:csv
                                {--name= : Name of the csv file to be read}';

    protected $description = 'Will read the informed file and import your data';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->option('name');

        call_user_func(new ImportClientCsvService(), $name);
    }
}
