<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penyewaan;
use App\Models\Tbkesenian;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $penyewaan = Penyewaan::with('pelanggan', 'tbkesenian')->orderBy('created_at', 'DESC')->get();

        return view ('admin.penyewaan.index', compact('penyewaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $tbkesenian = Tbkesenian::all();

        return view('admin.penyewaan.create', compact('pelanggan', 'tbkesenian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggan,id',
            'tbkesenian_id' => 'required|exists:tbkesenians,id',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        Penyewaan::create($request->all());

        // return response()->json(['message' => 'Data Penyewaan Berhasil Ditambahkan', 'data' => $penyewaan], 201);
        return redirect()->route('penyewaan.index')->with('success', 'Data Penyewaan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penyewaan = Penyewaan::with('pelanggan', 'tbkesenian')->findOrFail($id);
        // $pelanggan = Pelanggan::all();
        // $tbkesenian = Tbkesenian::all();

        return view('admin.penyewaan.show', compact('penyewaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //  mendapatkan data penyewaan
        $penyewaan = Penyewaan::find($id);

        //mendapatkan data yang ditampilkan secara dropdown
        $pelanggan = Pelanggan::all();
        $tbkesenian = Tbkesenian::all();


        // $dateFormatted = $penyewaan->tanggalpenyewaan->format('Y-m-d');


        return view('admin.penyewaan.edit', compact('penyewaan', 'pelanggan', 'tbkesenian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:pending,completed,canceled', // Sesuaikan opsi yang diperbolehkan
        ]);

        $penyewaan = Penyewaan::findOrFail($id);

        $penyewaan->update($request->all());
        return redirect()->route('penyewaan.index')->with('success', 'Data Penyewaan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penyewaan = Penyewaan::findOrFail($id);

        $penyewaan->delete();
        return redirect()->route('penyewaan.index')->with('success', 'Data penyewaan Berhasil Dihapus');
    }
}
