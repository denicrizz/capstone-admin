<?php

namespace App\Http\Controllers;

use App\Models\Kesenian;
use Illuminate\Http\Request;


class KesenianController extends Controller
{
    public function index(){
        return view ('admin.kesenian.index')->with([
            'kesenian' => Kesenian::all()
        ]);
    }

    public function create()
    {
        return view ('admin.kesenian.create');
    }

    public function store(Request $request){
        // dd($request->all());

        Kesenian::create($request->all());

        return redirect()->route('kesenian.index')->with('success', 'Data Kesenian Berhasil Ditambahkan');

    }
}
