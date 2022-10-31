<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Izin;

class IzinsiswaController extends Controller
{
    public function index()
    {
        $izins = izin::all();
        return view('izinsiswa', ['izins' => $izins]);
    }

    public function tambahsiswa()
    {
        return view('tambahsiswa');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'kehadiran' => 'required',
        ]);

        izin::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'kehadiran' => $request->kehadiran,
        ]);

        return redirect('/izinsiswa');
    }

    public function delete($id)
    {
        $izins = izin::find($id);
        $izins->delete();
        return redirect('/izinsiswa');

    }

   
}
