<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(){
        
        $data =DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori') ->orderBy('id_berita','desc')->get();
        return view('backend.berita', [
        'berita'=>$data,
        'kategori'=>DB::table('kategori')->get()
    ]);
    }
    
    public function ubah($id_berita){
        return view('backend.ubah',[
            'berita'=> DB::table('berita')->where('id_berita',$id_berita)->join('kategori','berita.id_kategori','=','kategori.id_kategori')->first(),
            'kategori' => DB::table('kategori')->get()
        ]);
        
    }
    public function lihat($id_berita){
        return view('backend.lihat',[
            'berita'=> DB::table('berita')->where('id_berita',$id_berita)->join('kategori','berita.id_kategori','=','kategori.id_kategori')->first(),
            'kategori' => DB::table('kategori')->get()
        ]);
        
    }


    public function input(Request $r){
        $filename = null;
        if($r->gambar){
            $filename = $r->gambar->getClientOriginalName();
            $r->file('gambar')->move('assets/images/', $r->gambar->getClientOriginalName());
        }

        DB::table('berita')->insert([
            'id_kategori'=> $r->id_kategori,
            'tgl'=> $r->tgl,
            'judul'=> $r->judul,
            'isi'=> $r->isi,
            'gambar' => $filename,
             'slug' => Str::slug($r->judul),
        ]);
        return redirect('/berita')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_berita){
        if ($r != ''){
         $gambar = $r->file('gambar');
 
         if ($gambar == '') {
            DB::table('berita')->where('id_berita', $id_berita)->update([
                'id_kategori'=> $r->id_kategori,
                'tgl'=> $r->tgl,
                'judul'=> $r->judul,
                'isi'=> $r->isi,
                 'slug' => Str::slug($r->judul),
             ]);
         } else {
             //hapus foto lama
             $fotolama = DB::table('berita')->where('id_berita', $id_berita)->first();
             if ($fotolama->gambar !=''){
                 unlink('assets/images/'. $fotolama->gambar);
             }
 
 
 
             $filename = $r->gambar->getClientOriginalName();
             $r->file('gambar')->move('assets/images/', $r->gambar->getClientOriginalName());
 
            DB::table('berita')->where('id_berita', $id_berita)->update([
                'id_kategori'=> $r->id_kategori,
                'tgl'=> $r->tgl,
                'judul'=> $r->judul,
                'isi'=> $r->isi,
                 'slug' => Str::slug($r->judul),  
                 'gambar' => $filename
             ]);
         }
         return redirect('/berita')->with('ubah','berhasil diedit');
        }
     }
    public function hapus($id_berita){
         //hapus foto lama
         $fotolama = DB::table('berita')->where('id_berita', $id_berita)->first();
         if ($fotolama->gambar !=''){
             unlink('assets/images/'. $fotolama->gambar);
         }
         
        DB::table('berita')->where('id_berita',$id_berita)->delete();
        return redirect('/berita')->with('hapus','Berhasil dihapus');
    }
}
