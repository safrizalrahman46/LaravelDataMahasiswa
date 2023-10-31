@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Nilai Siswa</h3>
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
           {{-- //validation --}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('/nilai/store') }}" method="POST">
            @csrf
             {{-- @dd($siswa->nama) --}}
            <div class="card-body">
                <div class="mb-2">
                    <label for="siswa_id" class="form-label">Nama Siswa </label>
                    {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="nama" > --}}
                    <select name="siswa_id" id="" class="custom-select rounded-0">
                        @foreach ($siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-select mb-2">
                    <label for="mapel_id" class="form-label">Mapel Siswa</label>
                    <select name="mapel_id" id="" class="custom-select rounded-0">
                        {{-- @dd($mapel->nama) --}}
                        @foreach($mapel as $pel)
                        <option value="{{ $pel->id }}">{{ $pel->nama_mapel }}</option>
                        @endforeach
                        </optgroup>

                    </select>
                </div>

                <div class="mb-2">
                    <label for="nilai" class="form-label">Nilai Siswa</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nilai" placeholder="nilai">
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
