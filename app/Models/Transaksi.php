<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; //jika primary field name bukan id, wajib diubah disini
    public $incrementing = true; //jika primary tidak auto increment ubah menjadi folder
    protected $table = 'transaksi';
    protected $fillable = ['id_outlet', 'kode_invoice', 'id_member', 'tgl', 'batas_waktu', 'tgl_bayar', 'biaya_tambahan'];

    public function Outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
    public function Member()
    {
        return $this->belongsTo(Member::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}