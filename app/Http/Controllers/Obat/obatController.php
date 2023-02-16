<?php

namespace App\Http\Controllers\Obat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\obat;
use DB;

class obatController extends Controller
{
    public function show()
    {
        $data = DB::table('obats')->get();
        return view('admin.menu.dataObat')
            ->with(compact('data'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
        ]);

        $obat = new obat();
        $obat->nama = $request->nama;
        $obat->jenis_obat = $request->jenis;
        $obat->deskripsi = $request->deskripsi;
        $obat->save();

        return redirect()->to('/dataObat')->send()->with('success', 'Obat Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
        ]);

        $obat = obat::find($id);
        $obat->nama = $request->nama;
        $obat->jenis_obat = $request->jenis;
        $obat->deskripsi = $request->deskripsi;
        $obat->save();

        return redirect()->to('/dataObat')->send()->with('success', 'Data Obat Berhasil Diedit!');

    }

    public function delete($id)
    {
        $deleted = DB::table('obats')->where('id','=', $id)->delete();
        return redirect()->to('/dataObat')->send()->with('success', 'Data Obat berhasil di hapus!');
    }
}
