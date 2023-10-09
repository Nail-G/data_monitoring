<?php

namespace App\Exports;

use App\Models\MasterData;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class Event_LogExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MasterData::all();
    }

    public function headings():array
    {
        return [
            'Modul',
            'Id Satuan',
            'Kode Cabang',
            'Last Update',
            'Database Name',
        ];
    }
}
