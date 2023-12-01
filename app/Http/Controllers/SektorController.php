<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SektorController extends Controller
{
    public function index(){
        $data =DB::table('sektor')->get();
        
        return view('backend.sektor', [
        'sektor'=>$data]);
    }
    public function input(Request $r){
        $data['sektor'] =DB::table('sektor')->insert([
            'nama'=> $r->nama,
        ]);
        return redirect('/sektor')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_sektor){
        DB::table('sektor')->where('id_sektor',$id_sektor)->update([
            'nama'=> $r->nama,
        ]);
        return redirect('/sektor')->with('ubah','Berhasil diedit');
    }
    public function hapus($id_sektor){
        DB::table('sektor')->where('id_sektor',$id_sektor)->delete();
        return redirect('/sektor')->with('hapus','Berhasil dihapus');
    }
}
