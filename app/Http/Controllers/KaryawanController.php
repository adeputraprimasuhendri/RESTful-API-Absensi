<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
class KaryawanController extends Controller
{
    public function index(){
        return Karyawan::all();
    }
    public function create(request $request){
        $karyawan = new Karyawan;
        $karyawan->nip = $request->nip;
        $karyawan->nama = $request->nama;
        $karyawan->bagian = $request->bagian;
        $karyawan->save();
        return "Data Berhasil Di Simpan";
    }
    public function update(request $request, $id){
        $nip = $request->nip;
        $nama = $request->nama;
        $bagian = $request->bagian;

        $karyawan = Karyawan::find($id);
        $karyawan->nip = $nip;
        $karyawan->nama = $nama;
        $karyawan->bagian = $bagian;
        $karyawan->save();
        return "Data Berhasil Di Ubah";
    }
    
    public function delete($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return "Data Berhasil Di Hapus";
    }
}
