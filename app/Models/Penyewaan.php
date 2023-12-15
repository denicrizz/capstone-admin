<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $table = "penyewaans";

    protected $fillable = [
        'pelanggan_id',
        'tbkesenian_id',
        'total',
        'keterangan',
        'tanggalmulai',
        'tanggalselesai',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function tbkesenian()
    {
        return $this->belongsTo(Tbkesenian::class, 'tbkesenian_id');
    }
}
