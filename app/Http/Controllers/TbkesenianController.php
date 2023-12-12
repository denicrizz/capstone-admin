<?php

namespace App\Http\Controllers;

use App\Models\Tbkesenian;
use Illuminate\Http\Request;

class TbkesenianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.kesenian.index')->with([
            'kesenian' => Tbkesenian::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.kesenian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tbkesenian::create($request->all());

        return redirect()->route('kesenian.index')->with('success', 'Data Kesenian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kesenian = Tbkesenian::findOrFail($id);
        return view ('admin.kesenian.show', compact('kesenian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kesenian = Tbkesenian::findOrFail($id);

        return view('admin.kesenian.edit', compact('kesenian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kesenian = Tbkesenian::findOrFail($id);

        $kesenian->update($request->all());
        return redirect()->route('kesenian.index')->with('success', 'Data kesenian Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kesenian = Tbkesenian::findOrFail($id);

        $kesenian->delete();
        return redirect()->route('kesenian.index')->with('success', 'Data Kesenian Berhasil Dihapus');
    }
}
