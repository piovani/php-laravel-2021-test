<?php

namespace App\Services\Csv;

use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

class ImportCsvService
{
    /**
     * @param null|string $name
     * @return null|array
     */
    public function __invoke($name = null)
    {
        /** @var Collection $data */
        if (empty($data = Excel::toCollection(new ImportCsvService(), sprintf('storage/csv/%s', $name)))) {
            return null;
        }

        return $this->formatData($data);
    }

    private function formatData(Collection $collection): array
    {
        $collection = $collection->first();
        $info = $collection->first();
        $return = [];

        $collection->skip(1)->each(function ($item) use (&$return, $info) {
            $return[] = [
                $info[0] => $item[0],
                $info[1] => $item[1],
                $info[2] => $item[2],
                $info[3] => $item[3],
                $info[4] => $item[4],
                $info[5] => $item[5],
            ];
        });

        return collect($return)->map(function ($item) {
            $item['cpf'] = preg_replace("/[^0-9]/", "", $item['cpf']);
            $item['cep'] = preg_replace("/[^0-9]/", "", $item['cep']);
            $item['datanasc'] = Carbon::createFromDate($item['datanasc']);

            return $item;
        })->toArray();
    }
}
