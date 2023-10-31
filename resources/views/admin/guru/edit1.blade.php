@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Data Siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/guru/{{ $guru->id }}/update" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_guru">Nama</label>
                    <input type="text" name="nama_guru" class="form-control" id="exampleInputEmail1"
                        placeholder="Nama Lengkap" value="{{ $guru->nama_guru }}">
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip" class="form-control" placeholder="Masukan NIP" value={{ $guru->nip }}>
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
