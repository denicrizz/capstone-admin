<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbkesenian extends Model
{
    use HasFactory;
    protected $table = "tbkesenians";

    protected $fillable = [
        'nama',
        'alamat',
        'catatan',
        'notelp',
        'harga',
        'email',
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }


}
