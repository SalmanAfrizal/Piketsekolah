<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penilaian;

use PDF;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaians = Penilaian::all();
        return view('penilaiansiswa', ['penilaians' => $penilaians]);
    }

    public function procces()
    {
        return view('penilaian');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'peringatan' => 'required'
        ]);

        Penilaian::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'peringatan' => $request->peringatan,
        ]);

        return redirect('penilaiansiswa');
    }

    public function cetak_pdf()
    {
        $penilaians = Penilaian::all();

        $pdf = PDF::loadview('penilaian_pdf',['penilaians' =>$penilaians]);
        return $pdf->stream();
    }

    public function delete($id)
    {
        $penilaians = Penilaian::find($id);
        $penilaians->delete();
        return redirect('/penilaiansiswa');

    }

    
}