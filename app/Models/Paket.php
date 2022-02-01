<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; //jika primary field name bukan id, wajib diubah disini
    public $incrementing = true; //jika primary tidak auto increment ubah menjadi folder
    protected $table = 'paket';
    protected $fillable = ['id_outlet', 'jenis', 'nama_paket', 'harga'];

    public function Outlet()
    {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
}
