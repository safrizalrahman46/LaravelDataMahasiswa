<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Response;
use Dompdf\Dompdf;
use PDF;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guru()
    {
        $guru = Guru::all();
        return view('admin.guru.index1', ['guru' => $guru]);
    }

    public function downloadpdf4()
    {
        $guru = Guru::all();
        $pdf = PDF::loadview('admin.guru.index1', ['guru' => $guru])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_Data_Guru.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_guru' => 'required',
            'nip'       => 'required'
        ]);

        Guru::create([
            'nama_guru' => $request->nama_guru,
            'nip'       => $request->nip
        ]);
        return redirect('/guru');
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
        $guru  =   Guru::find($id);
        return view('admin.guru.edit1', ['guru' => $guru]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_guru'      =>  'required',
            'nip'    =>  'required'
        ]);

        $guru = Guru::find($id);
        $guru->update($request->all());

        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $guru  =   Guru::where('nama_guru', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $guru   =   Guru::all();
        }
        return view('admin.guru.index1', ['guru' => $guru]);
    }

    // public function Mapel() {
    //     $mapel = Mapel::with('guru')->get();
    //     // dd($mapel);
    //     return view('admin.guru.mapel', ['mapels'=>$mapel]);
    // }
}
