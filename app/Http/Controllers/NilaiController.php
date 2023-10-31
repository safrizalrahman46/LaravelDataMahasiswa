<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Nilai;
use Illuminate\Http\Response;
use Dompdf\Dompdf;
use PDF;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = Nilai::with('siswa')->get();
        return view('admin.nilai.index', ['nilais' => $nilai]);
    }

    public function downloadpdf2()
    {
        $nilai = Nilai::all();
        $pdf = PDF::loadview('admin.nilai.index', ['nilais' => $nilai])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_nilai.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Nilai $id)
    {
        // $nilais = Nilai::findOrFail($id)->load(['siswa', 'mapel']);
        $mapel = Mapel::all();
        $siswa = siswa::all();
        return view('admin.nilai.create', compact('mapel', 'siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'nilai' => 'required'
        ]);

        Nilai::create([
            'siswa_id'  => $request->siswa_id,
            'mapel_id'  => $request->mapel_id,
            'nilai'  => $request->nilai
        ]);

        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    // string $id = value int => 10
    // '10'
    public function edit(int $id)
    {
        $nilais = Nilai::findOrFail($id)->load(['siswa', 'mapel']);
        $mapels = Mapel::all();
        $siswa = Siswa::all();
        return view('admin.nilai.edit', compact('nilais', 'siswa', 'mapels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'nilai' => 'required'
        ]);

        $nilai = Nilai::find($id);
        $nilai->update($request->all());

        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect()->back();
    }



    public function siswa()
    {
        $siswa = Siswa::all();
        return view('admin.siswa.index', ['siswa' => $siswa]);
    }

    // public function Mapel()
    // {
    //     $mapel = mapel::all();
    //     return view('admin.siswa.mapel', ['mapel' => $mapel]);
    // }

    public function Nilai()
    {
        $nilai = nilai::all();
        return view('admin.nilai.index', compact('siswa_id', 'mapel_id'));
    }

    //search e

    public function search(Request $request)
    {


        // dd($request->search); // bawaan laravel untuk request param
        // $_GET['search'] // default php
        if ($request->has('search')) {
            $nilai  = Nilai::whereHas('siswa', function ($query) {
                return $query->where('nama', 'LIKE', '%' . $_GET['search'] . '%');
            })->with(['siswa', 'mapel'])->get();
        } else {
            $nilai = Nilai::all();
        }


        return view('admin.nilai.index', ['nilais' => $nilai]);
    }

}
