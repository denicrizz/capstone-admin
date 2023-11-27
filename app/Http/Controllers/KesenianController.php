<?php

namespace App\Http\Controllers;

use App\Models\Kesenian;
use Illuminate\Http\Request;

class KesenianController extends Controller
{
    public function index(){
        $data = Kesenian::all();
        return view ('kesenian/kesenian')->with('datakesenian', $data);
    }
}
