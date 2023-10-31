@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Data Siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/siswa/{{ $siswa->id }}/update" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                        placeholder="Nama Lengkap" value="{{ $siswa->nama }}">
                </div>

                <div class="form-group">
                    <label for="jenkel">Pilih Jenis Kelamin</label>
                    <select name="jenkel" id="" class="custom-select rounded-0">
                        <option selected="">Pilih Jenis Kelamin</option>
                        <option value="Pria" @if($siswa->jenkel=='Pria') selected @endif>Pria</option>
                        <option value="Wanita" @if($siswa->jenkel=='Wanita') selected @endif>Wanita</option>
                    </select>
                </div>

                <label for="alamat" class="form-label">Alamat</label>
                <div class="form-floating">
                    <textarea name="alamat" id="floatingTextArea" class="form-control">{{ $siswa->alamat }}</textarea>
                </div>

                <div class="form-group">
                    <label for="hp">No HP</label>
                    <input type="number" name="hp" class="form-control" placeholder="+62" value={{ $siswa->hp }}>
                </div>

                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan</label>
                    <select name="jurusan" id="" class="custom-select rounded-0">
                        <option selected="">Pilih Jurusan</option>
                        <option value="Sistem Informatika" @if($siswa->jurusan=='Sistem Informatika') selected @endif>Sistem Informatika</option>
                        <option value="RPL" @if($siswa->jurusan=='RPL') selected @endif>RPL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ $siswa->email }}">
                </div>
            </div>
            <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
</div>
</form>
</div>
@endsection
