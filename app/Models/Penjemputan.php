<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Penjemputan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; //jika primary field name bukan id, wajib diubah disini
    public $incrementing = true; //jika primary tidak auto increment ubah menjadi folder
    protected $table = 'penjemputan3';
    protected $fillable = ['id_member', 'petugas', 'status'];

     public function member()
    {
        return $this->belongsTo(Member::class, 'id_member');
    }
}
