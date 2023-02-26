<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dokter;
use App\Models\keluhan;
use DB;
use Illuminate\Support\Facades\Auth;

class dokterController extends Controller
{

    // Interaksi Admin Ke Dokter

    public function show()
    {
        $data = dokter::where('jabatan', '=', 'dokter')->get();
        $data2 = DB::table('polis')->get();
        return view('admin.menu.dataDokter')
            ->with(compact('data'))
            ->with(compact('data2'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'poli' => 'required',
        ], [
            'email.unique' => 'Email Sudah Terdaftar! Gunakan Email Lain!'
        ]);

        $dokter = new dokter();
        $dokter->nama = $request->nama;
        $dokter->email = $request->email;
        $dokter->password = bcrypt($request->password);
        $dokter->jabatan = "dokter";
        $dokter->poli_id = $request->poli;
        $dokter->save();

        return redirect()->to('/dataDokter')->send()->with('success', 'Data Dokter Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'poli' => 'required',
        ], [
            'email.unique' => 'Email Sudah Terdaftar! Gunakan Email Lain!'
        ]);

        $dokter = dokter::find($id);
        $dokter->nama = $request->nama;
        $dokter->email = $request->email;
        $dokter->poli_id = $request->poli;
        $dokter->save();

        return redirect()->to('/profilDokter/'.$id)->send()->with('success', 'Data Dokter Berhasil Ditambahkan!');

    }

    public function detail($id)
    {
        $data = dokter::where('id','=', $id)->get();
        $data2 = keluhan::where('dokter_id', '=', $id)->get();
        $data3 = DB::table('polis')->get();
        return view('admin.menu.inner-menu.profilDokter')
            ->with(compact('data'))
            ->with(compact('data2'))
            ->with(compact('data3'));
    }

    public function hapus($id)
    {
        $deleted = DB::table('users')->where('id','=', $id)->delete();
        return redirect()->to('/dataDokter')->send()->with('success', 'Data Dokter Berhasil Di Hapus!');
    }

    public function ubahPassword(Request $request, $id){

        $request->validate([
            'password' => 'required',
        ]);

        $dokter = dokter::find($id);
        $dokter->password = bcrypt($request->password);
        $dokter->save();

        return redirect()->to('/profilDokter/'.$id)->send()->with('success', 'Password Berhasil Diubah!');

    }


    // Interaksi Dokter Ke Dokter

    public function showProfileDokter()
    {
        $data = dokter::where('id', '=', Auth::user()->id)->get();
        return view('dokter.menu.inner-menu.profil')
            ->with(compact('data'));
    }

    public function editD(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ], [
            'email.unique' => 'Email Sudah Terdaftar! Gunakan Email Lain!'
        ]);

        $dokter = dokter::find($id);
        $dokter->nama = $request->nama;
        $dokter->email = $request->email;
        $dokter->save();

        return back()->with('success', 'Data Anda Berhasil Diedit!');

    }

    public function ubahPasswordD(Request $request, $id){

        $request->validate([
            'password' => 'required',
        ]);

        $dokter = dokter::find($id);
        $dokter->password = bcrypt($request->password);
        $dokter->save();

        return back()->with('success', 'Password Anda Berhasil Diubah!');

    }
}
