<?php

namespace App\Http\Controllers\ICD10;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\icd10;
use DB;

class icd10Controller extends Controller
{
    public function show()
    {
        $data = DB::table('icd10s')->get();
        return view('admin.menu.dataICD10')
            ->with(compact('data'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'deskripsi' => 'required',
        ]);

        $icd10 = new icd10();
        $icd10->nama = $request->kode;
        $icd10->subnama = $request->subkode;
        $icd10->deskripsi = $request->deskripsi;
        $icd10->save();

        return redirect()->to('/dataICD10')->send()->with('success', 'ICD10 Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id){

        $request->validate([
            'kode' => 'required',
            'deskripsi' => 'required',
        ]);

        $icd10 = icd10::find($id);
        $icd10->nama = $request->kode;
        $icd10->subnama = $request->subkode;
        $icd10->deskripsi = $request->deskripsi;
        $icd10->save();

        return redirect()->to('/dataICD10')->send()->with('success', 'ICD10 Berhasil Diedit!');
    }

    public function delete($id)
    {
        $deleted = DB::table('icd10s')->where('id','=', $id)->delete();
        return redirect()->to('/dataICD10')->send()->with('success', 'Data ICD10 berhasil di hapus!');
    }
}
