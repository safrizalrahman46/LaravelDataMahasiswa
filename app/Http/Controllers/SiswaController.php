<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Response;
use Dompdf\Dompdf;
use PDF;
// use Barryvdh\DomPDF\Facade\Pdf;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.siswa.index', ['siswa'=>$siswa]);
    }

    public function downloadpdf()
    {
        $siswa = Siswa::all();
        $pdf = PDF::loadview('admin.siswa.index', ['siswa' => $siswa])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_siswa.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'jenkel'    => 'required',
            'alamat'    => 'required',
            'hp'        => 'required',
            'jurusan'   => 'required',
            'email'     => 'required'
        ]);


        Siswa::create([
            'nama'      =>$request->nama,
            'jenkel'    =>$request->jenkel,
            'alamat'    =>$request->alamat,
            'hp'        =>$request->hp,
            'jurusan'   =>$request->jurusan,
            'email'     =>$request->email
        ]);

        // $siswa = Siswa::create($request->all());
        // if($request->hasFile('foto')){
        //         $request->file('foto')->move('images/' ,$request->file('foto')->getClientOriginalName());
        //         $siswa->foto =$request->file('foto')->getClientOriginalName();
        //         $siswa->save();
        // }

        // if($request->hasFile('no_ktp')){
        //     $request->file('no_ktp')->move('images/' ,$request->file('no_ktp')->getClientOriginalName());
        //     $siswa->no_ktp =$request->file('no_ktp')->getClientOriginalName();
        //     $siswa->save();
        // }

        return redirect('/siswa');
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
        $siswa  =   Siswa::find($id);
        return view('admin.siswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama'      =>  'required',
            'jenkel'    =>  'required',
            'alamat'    =>  'required',
            'hp'        =>  'required',
            'jurusan'   =>  'required',
            'email'     =>  'required'
        ]);
        // $siswa = Siswa::find($id);
        // $siswa->nama = $request->nama;
        // $siswa->jenkel = $request->jenkel;
        // $siswa->alamat = $request->alamat;
        // $siswa->hp = $request->hp;
        // $siswa->jurusan = $request->jurusan;
        // $siswa->email = $request->email;

        // $siswa->save();

        $siswa = Siswa::find($id);
        $siswa->update($request->all());

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->back();
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $siswa  =   Siswa::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
           $siswa   =   Siswa::all();
        }
        return view('admin.siswa.index', ['siswa' => $siswa]);
    }

    public function mapel(){
        $mapel = Mapel::all();
        return view ('admin.mapel', ['mapel'=>$mapel]);
    }
}
