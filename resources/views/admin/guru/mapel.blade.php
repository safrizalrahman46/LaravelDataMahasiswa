@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mapel</h3>

                <div class="card-tools">
                    <form action="/mapel/search" class="form-inline" method="GET">
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
                            <th>Kode Mapel</th>
                            <th>Nama Mapel</th>
                            <th>Nama Guru</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($mapels as $mapel)
                         <tr>
                            <td>{{ $mapel->kode_mapel }}</td>
                            <td>{{ $mapel->nama_mapel }}</td>
                            <td>{{ $mapel->guru_id ? $mapel->guru->nama_guru : 'Tidak Punya Guru' }}</td>

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
