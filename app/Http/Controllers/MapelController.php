<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Response;
use Dompdf\Dompdf;
use PDF;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::with('guru')->get();
        // dd($mapel);
        return view('admin.mapel.index', ['mapel' => $mapel]);
    }

    public function downloadpdf3()
    {
        $mapel = Mapel::all();
        $pdf = PDF::loadview('admin.mapel.index', ['mapel' => $mapel])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_Data_Mapel.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapel = Mapel::all();
        $guru = Guru::all();
        return view('admin.mapel.create', compact('mapel', 'guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mapel' => 'required',
            'kode_mapel' => 'required',
            'guru_id' => 'required'
        ]);

        Mapel::create([
            'nama_mapel'  => $request->nama_mapel,
            'kode_mapel'  => $request->kode_mapel,
            'guru_id'  => $request->guru_id
        ]);

        return redirect('/mapel');
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
    public function edit(string $id)
    {
        $mapel = Mapel::findOrFail($id)->load(['guru']);
        $allMapel = Mapel::all();
        $guru = guru::all();
        return view ('admin.mapel.edit',compact('mapel','guru','allMapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_mapel' => 'required',
            'kode_mapel' => 'required',
            'guru_id' => 'required'
        ]);

        $mapel = mapel::find($id);
        // $allMapel = Mapel::all();
        $mapel->update($request->all());

        return redirect('/mapel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $mapel  =   Mapel::where('nama_mapel', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $mapel   =   Mapel::all();
        }
        return view('admin.mapel.index', ['mapel' => $mapel]);
    }
}
