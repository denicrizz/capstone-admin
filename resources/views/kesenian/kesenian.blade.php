@extends('layout/aplikasi')

@section('konten')
<h1>Data Kesenian</h1>
<table class="table" border="1px">
    <thead>
        <tr>
            <th>Nama:</th>
            <th>Alamat:</th>
            <th>No Telp:</th>
            <th>Harga:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datakesenian as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat}}</td>
            <td>{{ $item->notelp }}</td>
            <td>{{ $item->harga }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
