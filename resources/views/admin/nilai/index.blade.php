@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Nilai Siswa</h3>
                <br>
                <a href="{{ url('/downloadpdf2') }}" target="_blank" class="btn btn-info btn-md">Unduh PDF</a>
                <div class="card-tools">
                    <form action="/nilai/search" class="form-inline" method="GET">
                        <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama" value="{{ !empty($_GET['search']) ? $_GET['search']: ""  }}">

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
                            <th>Nama Siswa</th>
                            <th>Mapel Siswa</th>
                            <th>Nilai Siswa</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($nilais as $nilai)
                         <tr>
                            <td>{{ $nilai->siswa_id ? $nilai->siswa->nama : 'Tidak Ada'  }}</td>
                            <td>{{ $nilai->mapel_id ? $nilai->mapel->nama_mapel : 'Tidak Punya Guru'  }}</td>
                            <td>{{ $nilai->nilai }}</td>
                             <td><a href="/nilai/{{ $nilai->id }}/delete" class="btn btn-danger" onclick="return confirm('apakah yakin dihapus? {{ $nilai->nama }}');">Hapus</a>
                            <a href="/nilai/{{ $nilai->id }}/edit" class="btn btn-warning">Edit</a>
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
