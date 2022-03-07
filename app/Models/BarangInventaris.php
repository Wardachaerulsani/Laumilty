<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BarangInventaris extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; //jika primary field name bukan id, wajib diubah disini
    public $incrementing = true; //jika primary tidak auto increment ubah menjadi folder
    protected $table = 'barang_inventaris';
    protected $guarded = ['id', 'created_at', 'updated_ad'];
}
