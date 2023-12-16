@extends('./layout/admin')
@section('main')
       <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Detil Data Penyewaan</h5>
                    <div class="row mb-3">
                        <label for="pelanggan_id" class="col-sm-2 col-form-label">Nama Penyewa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penyewaan->pelanggan->nama }}" readonly>
                            @error('pelanggan_id')
                            <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tbkesenian_id" class="col-sm-2 col-form-label">Nama Kesenian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penyewaan->tbkesenian->nama }}" readonly>
                            @error('tbkesenian_id')
                            <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="keterangan" id="keterangan" class="form-control" style="height: 100px" readonly>{{ $penyewaan->keterangan }}"</textarea>
                        </div>
                      </div>
                   {{-- <div class="row mb-3">
                        <label for="tanggalpenyewaan" class="col-sm-2 col-form-label">Tanggal Penyewaan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggalmulai" name="tanggalmulai">
                            @error('tanggalmulai')
                                <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <label for="tbkesenian_id" class="col-sm-2 col-form-label">Nama Kesenian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="{{ $penyewaan->status }}" readonly>
                            @error('status')
                            <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="total" name="total" value="{{ $penyewaan->total }}" readonly>
                            @error('total')
                                <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
             </div>
           </div>
       </div>
@endsection

