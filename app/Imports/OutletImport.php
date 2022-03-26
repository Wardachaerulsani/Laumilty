<?php

namespace App\Imports;

use App\Models\Outlet;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;


class OutletImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Outlet([
            'nama' => $row['nama'],
            'alamat' => $row['alamat'],
            'tlp' => $row['tlp']
            
        ]);
    }
    public function headingRow(): int
    {
        return 3;
    }
}
