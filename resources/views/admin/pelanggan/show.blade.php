@extends('./layout/admin')
@section('main')
       <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Detil Data Kesenian</h5>
                   <div class="row mb-3">
                       <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="nama" name="nama" value="{{ $pelanggan->nama }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pelanggan->alamat }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="notlp" class="col-sm-2 col-form-label">No Telepon</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" name="notlp" id="notlp" value="{{ $pelanggan->notlp }}" readonly>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="email" name="email" value="{{ $pelanggan->email }}" readonly>
                       </div>
                   </div>
             </div>
           </div>
       </div>
@endsection

