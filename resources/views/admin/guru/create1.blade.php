@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Guru</h3>
        </div>
        <!-- /.card-header -->

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

        <!-- form start -->
        <form action="{{ url('/guru/store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_guru">Nama</label>
                    <input type="text" name="nama_guru" class="form-control" id="exampleInputEmail1"
                        placeholder="Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip" class="form-control" placeholder="Masukan NIP">
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
