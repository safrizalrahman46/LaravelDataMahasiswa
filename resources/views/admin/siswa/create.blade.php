@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Siswa</h3>
        </div>
        <!-- /.card-header -->

           {{-- //validation --}}
            @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif

       {{-- @dd($siswas->nama) --}}
        <!-- form start -->
        <form action="{{ url('/siswa/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @dd($siswa->nama) --}}
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" id="exampleInputEmail1"
                        placeholder="Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="jenkel">Pilih Jenis Kelamin</label>
                    <select name="jenkel" id="" class="custom-select rounded-0">
                        <option {{ old('jenkel') == '' ? 'selected' : '' }} selected="">Pilih Jenis Kelamin</option>
                        <option {{ old('jenkel') == 'Pria' ? 'selected' : '' }} value="Pria">Pria</option>
                        <option {{ old('jenkel') == 'Wanita' ? 'selected' : '' }} value="Wanita">Wanita</option>
                    </select>
                </div>

                <label for="alamat" class="form-label">Alamat</label>
                <div class="form-floating">
                    <textarea name="alamat" id="floatingTextArea" class="form-control">
                        {{ old('alamat') }}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="hp">No HP</label>
                    <input type="number" name="hp" class="form-control" placeholder="+62">
                </div>

                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan</label>
                    <select name="jurusan" id="" class="custom-select rounded-0">
                        <option selected="">Pilih Jurusan</option>
                        <option value="Sistem Informatika">Sistem Informatika</option>
                        <option value="RPL">RPL</option>
                        <option value="DKV">DKV</option>
                        <option value="TKJ">TKJ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
            </div>

             {{-- Unggah Foto --}}
            {{-- <div class="card card-danger">
                <div class="card-header">
                    <div class="card-title">Unggah Dokumen</div>
                </div>
              </div> --}}



              {{-- <div class="card-body">
              <label for="foto" class="form-label">foto</label>
              <div class="input-group mb-3">
                <input type="file" name="foto" class="form-control" id="inputGroupfile">
              <label for="inputGroupfile" class="input-group-text">Unggah</label>
            </div>

            <label for="no_ktp" class="form-label">KTP</label>
            <div class="input-group mb-3">
              <input type="file" name="no_ktp" class="form-control" id="inputGroupfile2">
            <label for="inputGroupfile2" class="input-group-text">Unggah</label>
          </div>
        </div> --}}
            <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>
@endsection
