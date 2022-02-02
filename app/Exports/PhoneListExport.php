<?php

namespace App\Exports;

use App\Models\PhoneList;
use Maatwebsite\Excel\Concerns\FromCollection;

class PhoneListExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PhoneList::all();
    }
}
