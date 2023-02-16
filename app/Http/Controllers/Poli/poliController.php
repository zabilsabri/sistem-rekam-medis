<?php

namespace App\Http\Controllers\Poli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\poli;
use DB;

class poliController extends Controller
{
    public function show()
    {
        $data = DB::table('polis')->get();
        return view('admin.menu.dataPoli')
            ->with(compact('data'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $poli = new poli();
        $poli->nama = $request->nama;
        $poli->save();

        return redirect()->to('/dataPoli')->send()->with('success', 'Poli Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id){

        $request->validate([
            'nama' => 'required',
        ]);

        $poli = poli::find($id);
        $poli->nama = $request->nama;
        $poli->save();

        return redirect()->to('/dataPoli')->send()->with('success', 'Poli Berhasil Di Edit!');

    }

    public function delete($id)
    {
        $deleted = DB::table('polis')->where('id','=', $id)->delete();
        return redirect()->to('/dataPoli')->send()->with('success', 'Data Poli berhasil di hapus!');
    }
}
