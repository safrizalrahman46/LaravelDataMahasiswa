@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
                <br>
                <a href="{{ url('/downloadpdf') }}" target="_blank" class="btn btn-info btn-md">Unduh PDF</a>
              </br>
                <div class="card-tools">
                    <form action="/siswa/search" class="form-inline" method="GET">
                        <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Jurusan</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($siswa as $siswa)
                         <tr>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->jenkel }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->hp }}</td>
                            <td>{{ $siswa->jurusan }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td><a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger" onclick="return confirm('apakah yakin dihapus? {{ $siswa->nama }}');">Hapus</a>
                            <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
</div>
@endsection
