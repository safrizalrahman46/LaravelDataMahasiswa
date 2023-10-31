<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $siswas = Siswa::count();
        $guru = Guru::count();
        $mapel = mapel::count();
        $nilai = Nilai::count();
        return view('admin.dashboard', compact('siswas','guru','mapel','nilai'));
    }
}
