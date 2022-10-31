<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;

use PDF;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('/siswa', ['siswas' => $siswas]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/siswa')->with('succes', 'Kamu berhasil menginputnya');
    }

    public function edit($id)
    {
        $siswas = Siswa::find($id);
        return view('siswa_edit', ['siswas' => $siswas]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'

        ]);

        $siswas = siswa::find($id);
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->kelas = $request->kelas;
        $siswas->jurusan = $request->jurusan;
        $siswas->save();
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $siswas = siswa::find($id);
        $siswas->delete();
        return redirect('/siswa');
    }

    public function cetak_pdf()
    {
        $siswas = Siswa::all();

        $pdf = PDF::loadview('siswa_pdf',['siswas' => $siswas]);
        return $pdf->stream();
    }
}
