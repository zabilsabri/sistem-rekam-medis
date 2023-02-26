<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dokter as Admin;
use Illuminate\Support\Facades\Auth;


class adminController extends Controller
{
    public function showProfileAdmin()
    {
        $data = Admin::where('id', '=', Auth::user()->id)->get();
        return view('admin.menu.inner-menu.profil')
            ->with(compact('data'));
    }

    public function edit(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ], [
            'email.unique' => 'Email Sudah Terdaftar! Gunakan Email Lain!'
        ]);

        $Admin = Admin::find($id);
        $Admin->nama = $request->nama;
        $Admin->email = $request->email;
        $Admin->save();

        return back()->with('success', 'Data Anda Berhasil Diedit!');

    }

    public function ubahPassword(Request $request, $id){

        $request->validate([
            'password' => 'required',
        ]);

        $Admin = Admin::find($id);
        $Admin->password = bcrypt($request->password);
        $Admin->save();

        return back()->with('success', 'Password Anda Berhasil Diubah!');

    }

}
