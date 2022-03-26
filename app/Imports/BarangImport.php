<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;


class BarangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Barang([
            'nama' => $row['nama'],
            'qty' => $row['qty'],
            'harga' => $row['harga'],
            'beli' => $row['beli'],
            'supplier' => $row['supplier'],
            'status' => $row['status']
            
        ]);
    }
    public function headingRow(): int
    {
        return 3;
    }
}
