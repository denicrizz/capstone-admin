@extends('./layout/admin')

@section('main')

<div class="card">
    <div class="card-body">
        <div class="pt-2" align="right">
            <a href="{{ url('penyewaan/create') }}" class="btn btn-success btn-sm" title="Tambah Data penyewaan"><i class="ri-add-circle-fill"></i>Tambah</a>
        </div>
      <h5 class="card-title">Data Penyewaan</h5>
      <!-- Table with stripped rows -->
      @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
      @endif
      <table class="table datatable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Nama Kesenian</th>
            <th>Alamat Pelanggan</th>
            <th>Total</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($penyewaan as $penyewaans)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $penyewaans->pelanggan->nama }}</td>
                    <td>{{ $penyewaans->tbkesenian->nama }}</td>
                    <td>{{ $penyewaans->keterangan }}</td>
                    <td>{{ $penyewaans->total }}</td>
                    <td>
                        <div class="pt-2">
                            <a href="{{ route('penyewaan.show', $penyewaans->id) }}" class="btn btn-warning btn-sm" title="Detil"><i class="bi bi-book"></i></a>
                            <a href="{{ route('penyewaan.edit', $penyewaans->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('penyewaan.destroy', $penyewaans->id) }}" method="POST" type="button"  class="btn btn-danger btn-sm p-0" onsubmit="return confirm ('Apakah Anda yakin ingin menghapus data penyewaan?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm m-0" title="Hapus"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
</div>
@endsection
