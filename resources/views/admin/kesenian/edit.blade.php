@extends('./layout/admin')
@section('main')
       <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Tambah Data Kesenian</h5>
               <form method="POST" action="{{ route('kesenian.update', $kesenian->id) }}">
                   @csrf
                   @method('PUT')
                   <div class="row mb-3">
                       <label for="nama" class="col-sm-2 col-form-label">Nama Kesenian</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="nama" name="nama" value="{{ $kesenian->nama }}">
                           @error('nama')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $kesenian->alamat }}">
                           @error('alamat')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="catatan" id="catatan" value="{{ $kesenian->catatan }}">
                           @error('catatan')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="notelp" id="notelp" value="{{ $kesenian->notelp }}">
                           @error('notelp')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="harga" name="harga" value="{{ $kesenian->harga }}">
                           @error('harga')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="email" name="email" value="{{ $kesenian->email }}">
                           @error('email')
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

