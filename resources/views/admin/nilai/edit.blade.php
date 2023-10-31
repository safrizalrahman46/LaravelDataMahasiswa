@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit inputan</h6>
            </div>
            <div class="container-fluid">

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

                <form action="/nilai/{{ $nilais->id }}/update" method="POST">
                    @csrf
                    <br>
                    <div class="mb-2">
                        <label for="siswa_id" class="form-label">Nama Siswa </label>
                        {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="nama" > --}}
                        <select name="siswa_id" id="" class="custom-select rounded-0">

                            @if ($nilais->siswa)
                            {{-- @dd($nilais->siswa) --}}
                                @foreach ($siswa as $sis)
                                    <option value="{{ $sis->id }}" @selected($sis->id == $nilais->siswa->id)>{{ $sis->nama }}
                                    </option>
                                @endforeach
                            @else
                                @foreach ($siswa as $sis)
                                    <option value="{{ $sis->id }}">{{ $sis->nama }}</option>
                                @endforeach
                            @endif




                        </select>

                    </div>

                    <div class="form-select mb-2">
                        <label for="mapel_id" class="form-label">Mapel Siswa</label>
                        {{-- @dd($nilais) --}}
                        <select name="mapel_id" id="" class="custom-select rounded-0">
                            @if ($nilais->mapel)
                            @foreach ($mapels as $pel)
                            <option value="{{ $pel->id }}" @selected($pel->id == $nilais->mapel->id)>{{ $pel->nama_mapel }}
                            </option>
                        @endforeach
                            @else
                            @foreach ($mapels as $pel)
                            <option value="{{ $pel->id }}" >{{ $pel->nama_mapel }}
                            </option>
                        @endforeach
                            @endif



                        </select>
                    </div>

                    {{-- <div class="mb-2">
          <label for="siswa_id" class="form-label">Nama Siswa</label>
          <input class="form-control" id="exampleInputEmail1" name="siswa_id" placeholder="siswa_id" value="{{ $nilais->siswa_id }}">
          @foreach ($siswa as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
      </optgroup>
        </div> --}}

                    {{-- <div class="form-label">
            <label for="mapel_id" class="form-label" >Mapel Siswa</label>
          <input name="mapel_id" placeholder="mapel_id" value="{{ $nilais->mapel_id }}" class="form-control" id="exampleInputEmail1" >
        </div> --}}

                    <div class="form-label">
                        <label for="nilai" class="form-label">Nilai Siswa</label>
                        <input type="number" name="nilai" placeholder="nilai" value="{{ $nilais->nilai }}"
                            class="form-control" id="exampleInputEmail1">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <hr>
                </form>
            </div>
        </div>
    </div>


@endsection
