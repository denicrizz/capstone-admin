@extends('./layout/admin')
@section('main')
       <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Tambah Data Kesenian</h5>
               <form method="POST" action="{{ route('pelanggan.store') }}">
                   @csrf
                   <div class="row mb-3">
                       <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="nama" name="nama">
                           @error('nama')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="alamat" id="alamat">
                           @error('alamat')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="notlp" class="col-sm-2 col-form-label">No Telepon</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="notlp" id="notlp">
                           @error('notlp')
                               <span class="danger text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="email" name="email">
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

