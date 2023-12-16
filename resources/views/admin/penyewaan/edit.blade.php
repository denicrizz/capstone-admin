@extends('./layout/admin')
@section('main')
       <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Edit Data Penyewaan</h5>
               <form method="POST" action="{{ route('penyewaan.update', $penyewaan->id) }}">
                   @csrf
                   @method('PUT')
                    <div class="row mb-3">
                        <label for="pelanggan_id" class="col-sm-2 col-form-label">Nama Penyewa</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="pelanggan_id" name="pelanggan_id">
                                @foreach ($pelanggan as $pelanggans)
                                    <option value="{{ $pelanggans->id }}">{{ $pelanggans->nama }}</option>
                                @endforeach
                            </select>
                            @error('pelanggan_id')
                            <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tbkesenian_id" class="col-sm-2 col-form-label">Nama Kesenian</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="tbkesenian_id" name="tbkesenian_id">
                                @foreach ( $tbkesenian as $tbkesenians )
                                    <option value="{{ $tbkesenians->id }}">{{ $tbkesenians->nama }}</option>
                                @endforeach
                            </select>
                            @error('tbkesenian_id')
                            <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="keterangan" id="keterangan" class="form-control" style="height: 100px" >{{ $penyewaan->keterangan }}</textarea>
                        </div>
                      </div>
                   <div class="row mb-3">
                        <label for="tanggalpenyewaan" class="col-sm-2 col-form-label">Tanggal Penyewaan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggalpenyewaan" name="tanggalpenyewaan" value="{{ $penyewaan->tanggalpenyewaan }}">
                            @error('tanggalpenyewaan')
                                <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pelanggan_id" class="col-sm-2 col-form-label">Nama Penyewa</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="status" name="status">
                                {{-- @foreach ($sewa as $sewas) --}}
                                <option value="pending" {{ $penyewaan->selectField === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ $penyewaan->selectField === 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="canceled" {{ $penyewaan->selectField === 'canceled' ? 'selected' : '' }}>Canceled</option>
                                {{-- @endforeach --}}
                            </select>
                            @error('status')
                            <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="total" name="total" value="{{ $penyewaan->total }}">
                            @error('total')
                                <span class="danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label"></label>
                       <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                       </div>
                   </div>
               </form>
             </div>
           </div>
       </div>
@endsection

