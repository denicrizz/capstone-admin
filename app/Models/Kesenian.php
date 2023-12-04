<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesenian extends Model
{
    use HasFactory;
    protected $table = "kesenian";
    protected $primaryKey = "idkesenian";

    public $incrementing = false;
    public $timestamps = true;
}
