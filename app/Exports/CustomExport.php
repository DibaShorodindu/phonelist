<?php

namespace App\Exports;

use App\Models\Phonelist;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class CustomExport implements FromQuery
{
    use Exportable;
    protected $ids;
    public function __construct($ids)
    {
        $this->ids = $ids;
    }

    public function query()
    {
        return Phonelist::whereIn('id',$this->ids);
    }
}
