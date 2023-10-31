<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function beranda(){
        return view('dinamis.beranda');
    }

    public function profil() {
        return view('dinamis.profil');
    }

    public function kontak() {
        return view('dinamis.kontak');
    }
}
