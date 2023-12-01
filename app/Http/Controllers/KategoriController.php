<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        $data =DB::table('kategori')->get();
        
        return view('backend.kategori', [
        'kategori'=>$data]);
    }
    public function input(Request $r){
        $data['kategori'] =DB::table('kategori')->insert([
            'nama'=> $r->nama,
        ]);
        return redirect('/kategori')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_kategori){
        DB::table('kategori')->where('id_kategori',$id_kategori)->update([
            'nama'=> $r->nama,
        ]);
        return redirect('/kategori')->with('ubah','Berhasil diedit');
    }
    public function hapus($id_kategori){
        DB::table('kategori')->where('id_kategori',$id_kategori)->delete();
        return redirect('/kategori')->with('hapus','Berhasil dihapus');
    }
    
}
