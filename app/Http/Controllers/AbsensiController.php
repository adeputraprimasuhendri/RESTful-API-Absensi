<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;

class AbsensiController extends Controller
{
    public function index(){
        return Absensi::all();
    }
    public function create(request $request){
        $data = new Absensi;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->images = $request->images;
        $data->iduser = $request->iduser;
        $data->postdate = $request->postdate;
        $data->save();
        return "Data Berhasil Di Simpan";
    }
    
    public function delete($id){
        $data = Absensi::find($id);
        $data->delete();
        return "Data Berhasil Di Hapus";
    }
}
