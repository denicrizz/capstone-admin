@extends('./layout/admin')
@section('main')
       <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Detail Data Kesenian</h5>
                   <div class="row mb-3">
                       <label for="idkesenian" class="col-sm-2 col-form-label">Id Kesenian</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="idkesenian" name="idkesenian" value="{{ $kesenian->id }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="nama" class="col-sm-2 col-form-label">Nama Kesenian</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="nama" name="nama" value="{{ $kesenian->nama }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $kesenian->alamat }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="catatan" id="catatan" value="{{ $kesenian->catatan }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="notelp" id="notelp" value="{{ $kesenian->notelp }}"  readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="harga" name="harga" value="{{ $kesenian->harga }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="email" name="email" value="{{ $kesenian->email }}" readonly>
                       </div>
                   </div>
             </div>
           </div>
       </div>
@endsection

