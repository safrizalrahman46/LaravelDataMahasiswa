
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

    <form action="/mapel/{{ $mapel->id }}/update" method="POST">
        @csrf
        <br>
        {{-- @dd($mapel->mapel) --}}
        <div class="form-label">
            <label for="nama_mapel" class="form-label" >Nama Mapel</label>
          {{-- <input type="" name="nama_mapel" placeholder="nama_mapel" value="{{ $mapel->nama_mapel }}" class="form-control" id="exampleInputEmail1" > --}}
          {{-- @dd($mapel) --}}
          <select  name="nama_mapel" id="" class="custom-select rounded-0">
          @foreach($allMapel as $mp)
          {{-- value="{{ $mp->id }}" Diubah Ke value="{{ $mp->nama_mapel }}" --}}
            <option value="{{ $mp->nama_mapel }}"  @selected($mp->id == $mapel->id) >{{ $mp->nama_mapel }}</option>
          @endforeach
          </select>
        </div>

        <div class="form-label">
            <label for="kode_mapel" class="form-label" >Kode Mapel</label>
          <input type="text" name="kode_mapel" placeholder="kode_mapel" value="{{ $mapel->kode_mapel }}" class="form-control" id="exampleInputEmail1" >
        </div>

            <div class="form-select mb-2">
                <label for="guru_id" class="form-label">Guru Pengajar</label>
                {{-- @dd($nilais) --}}
                  <select  name="guru_id" id="" class="custom-select rounded-0">
                    {{-- @foreach($mapel as $map)
                    <option value="{{ $map->id }}"  @selected($map->id == $mapel->guru->id) >{{ $gr->guru_id }}</option>
                  @endforeach --}}
                    @foreach($guru as $gr)
                      <option value="{{ $gr->id }}"  @selected($gr->id == $mapel->guru->id) >{{ $gr->nama_guru }}</option>
                    @endforeach
                </optgroup>

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



            <br>
        <button type="submit" class="btn btn-warning">Update</button>
        <hr>
      </form>
    </div>
</div>
</div>


@endsection
