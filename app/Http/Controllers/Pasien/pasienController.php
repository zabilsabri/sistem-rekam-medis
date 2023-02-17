<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\obat;
use App\Models\poli;
use App\Models\keluhan;
use App\Models\dokter;
use DB;
use Illuminate\Support\Facades\Auth;

class pasienController extends Controller
{
    public function show()
    {
        $data = pasien::get();
        return view('admin.menu.dataPasien')
            ->with(compact('data'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nKepalaKeluarga' => 'required',
            'nIbuKandung' => 'required',
            'kodeDesa' => 'required',
            'nik' => 'required',
            'agama' => 'required',
            'tglLahir' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'noTelp' => 'required',
            'jenisAsuransi' => 'required',
        ]);

        $pasien = new pasien();
        $pasien->nama = $request->nama;
        $pasien->nKepalaKeluarga = $request->nKepalaKeluarga;
        $pasien->nIbuKandung = $request->nIbuKandung;
        $pasien->kode_desa = $request->kodeDesa;
        $pasien->nik = $request->nik;
        $pasien->agama = $request->agama;
        $pasien->tglLahir = $request->tglLahir;
        $pasien->jk = $request->jk;
        $pasien->status = $request->status;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->alamat = $request->alamat;
        $pasien->noTelp = $request->noTelp;
        $pasien->jenis_asuransi = $request->jenisAsuransi;
        $pasien->no_kartu = $request->noAsuransi;

        $pasien->save();

        return redirect()->to('/kunjunganPasien')->send()->with('success', 'Data Pasien Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'nKepalaKeluarga' => 'required',
            'nIbuKandung' => 'required',
            'kodeDesa' => 'required',
            'nik' => 'required',
            'agama' => 'required',
            'tglLahir' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'noTelp' => 'required',
            'jenisAsuransi' => 'required',
        ]);

        $pasien = pasien::find($id);
        $pasien->nama = $request->nama;
        $pasien->nKepalaKeluarga = $request->nKepalaKeluarga;
        $pasien->nIbuKandung = $request->nIbuKandung;
        $pasien->kode_desa = $request->kodeDesa;
        $pasien->nik = $request->nik;
        $pasien->agama = $request->agama;
        $pasien->tglLahir = $request->tglLahir;
        $pasien->jk = $request->jk;
        $pasien->status = $request->status;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->alamat = $request->alamat;
        $pasien->noTelp = $request->noTelp;
        $pasien->jenis_asuransi = $request->jenisAsuransi;
        $pasien->no_kartu = $request->noAsuransi;

        $pasien->save();

        return redirect()->to('/rmPasien/'.$id)->send()->with('success', 'Data Pasien Berhasil Di Edit');

    }

    public function detail($id)
    {
        $data = pasien::where('id','=', $id)->get();
        $data2 = keluhan::where('pasien_id', '=', $id)->get();
        $data3 = poli::get();
        $data4 = dokter::where('jabatan', '=', 'dokter')->get();
        return view('admin.menu.inner-menu.rmPasien')
            ->with(compact('data'))
            ->with(compact('data2'))
            ->with(compact('data3'))
            ->with(compact('data4'));
    }

    public function detailDokter($id)
    {
        $data = pasien::where('id','=', $id)->get();
        $data2 = keluhan::where('pasien_id', '=', $id)->get();
        $data3 = obat::get();
        return view('dokter.menu.inner-menu.rmPasien')
            ->with(compact('data'))
            ->with(compact('data2'))
            ->with(compact('data3'));
        }


    public function hapus($id)
    {
        $deleted = DB::table('pasiens')->where('id','=', $id)->delete();
        return redirect()->to('/dataPasien')->send()->with('success', 'Data Pasien Berhasil Di Hapus!');
    }

    public function rm()
    {
        $data = keluhan::get();
        return view('admin.menu.riwayatMedis')
            ->with(compact('data'));
    }

    public function rmDokter()
    {
        $data = keluhan::where('dokter_id', '=', Auth::user()->id)->get();
        return view('dokter.menu.riwayatMedis')
            ->with(compact('data'));
    }

    public function tambahRM(Request $request, $id)
    {
        $request->validate([
            'keluhan' => 'required',
            'poli' => 'required',
            'dokter' => 'required',
        ]);

        $keluhan = new keluhan();
        $keluhan->pasien_id = $id;
        $keluhan->keluhan = $request->keluhan;
        $keluhan->poli_id = $request->poli;
        $keluhan->dokter_id = $request->dokter;
        $keluhan->save();

        return redirect()->to('/rmPasien/'.$id)->send()->with('success', 'Riwayat Medis Pasien Berhasil Ditambahkan!');
    }

    public function editRM(Request $request, $id, $pId)
    {
        $request->validate([
            'keluhan' => 'required',
            'poli' => 'required',
            'dokter' => 'required',
        ]);

        $keluhan = keluhan::find($id);
        $keluhan->keluhan = $request->keluhan;
        $keluhan->poli_id = $request->poli;
        $keluhan->dokter_id = $request->dokter;
        $keluhan->save();

        return redirect()->to('/rmPasien/'.$pId)->send()->with('success', 'Riwayat Medis Pasien Berhasil Diedit!');
    }

    public function hapusRM($id)
    {
        $deleted = DB::table('keluhans')->where('id','=', $id)->delete();
        return redirect()->to('/rmPasien/'.$id)->send()->with('success', 'Riwayat Penyakit Pasien berhasil di hapus!');
    }
}
