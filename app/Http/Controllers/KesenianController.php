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

    public function store(Request $request){

        Kesenian::create($request->except([ 'submit']));

        return redirect ('admin.kesenian.create');
    }
}
