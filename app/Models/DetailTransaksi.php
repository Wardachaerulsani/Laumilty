<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; //jika primary field name bukan id, wajib diubah disini
    public $incrementing = true; //jika primary tidak auto increment ubah menjadi folder
    protected $table = 'detail_transaksi';
    protected $fillable = ['id_transaksi', 'id_paket', 'qty', 'keterangan'];

    public function Transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
    public function Paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
}
