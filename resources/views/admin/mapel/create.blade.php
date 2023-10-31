@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Mapel</h3>
        </div>

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

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('/mapel/store') }}" method="POST">
            @csrf
             {{-- @dd($siswa->nama) --}}
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_mapel">Nama Mapel</label>
                    <input type="text" name="nama_mapel" class="form-control" id="exampleInputEmail1"
                        placeholder="Nama Mapel">
                </div>

                <div class="form-group">
                    <label for="kode_mapel">Kode Mapel</label>
                    <input type="text" name="kode_mapel" class="form-control" id="exampleInputEmail1"
                        placeholder="Kode Mapel">
                </div>

                 <div class="form-select mb-2">
                    <label for="guru_id" class="form-label">Guru Pengajar</label>
                    <select name="guru_id" id="" class="custom-select rounded-0">
                        {{-- @dd($mapel->nama) --}}
                        @foreach($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_guru }}</option>
                        @endforeach
                        </optgroup>

                    </select>
                </div>
            </div>
            <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>
@endsection
