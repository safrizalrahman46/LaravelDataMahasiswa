@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Guru</h3>
                <br>
                <a href="{{ url('/downloadpdf4') }}" target="_blank" class="btn btn-info btn-md">Unduh PDF</a>
                <div class="card-tools">
                    <form action="/guru/search" class="form-inline" method="GET">
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
                            <th>NIP</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($guru as $gr)
                         <tr>
                            <td>{{ $gr->nama_guru }}</td>
                            <td>{{ $gr->nip }}</td>
                             <td><a href="/guru/{{ $gr->id }}/delete" class="btn btn-danger" onclick="return confirm('apakah yakin dihapus? {{ $gr->nama_guru }}');">Hapus</a>
                            <a href="/guru/{{ $gr->id }}/edit" class="btn btn-warning">Edit</a>
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
