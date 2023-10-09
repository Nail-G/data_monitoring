<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserManagementExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('name', 'email', 'role')->get();
        
    }

        public function headings():array
    {
        return [
            'Nama',
            'Email',
            'Role',
        ];
    }
}
