<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    public function index(){
        $data =DB::table('jabatan')->get();
        
        return view('backend.jabatan', [
        'jabatan'=>$data]);
    }
    public function input(Request $r){
        $data['jabatan'] =DB::table('jabatan')->insert([
            'nama'=> $r->nama,
        ]);
        return redirect('/jabatan')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_jabatan){
        DB::table('jabatan')->where('id_jabatan',$id_jabatan)->update([
            'nama'=> $r->nama,
        ]);
        return redirect('/jabatan')->with('ubah','Berhasil diedit');
    }
    public function hapus($id_jabatan){
        DB::table('jabatan')->where('id_jabatan',$id_jabatan)->delete();
        return redirect('/jabatan')->with('hapus','Berhasil dihapus');
    }
}
