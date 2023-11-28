<?php

namespace App\Http\Controllers;

use App\Models\Kesenian;
use Illuminate\Http\Request;

class KesenianController extends Controller
{
    public function index(){
        return view ('kesenian/index');
    }
}
