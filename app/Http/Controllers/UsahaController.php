<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsahaController extends Controller
{
    public function index(){
        
        $data =DB::table('usaha')->join('sektor','usaha.id_sektor','=','sektor.id_sektor') ->orderBy('id_usaha','desc')->get();
        return view('backend.usaha', [
        'usaha'=>$data,
        'sektor'=>DB::table('sektor')->get()
    ]);
    }
    public function input(Request $r){
        $filename = null;
        if($r->logo){
            $filename = $r->logo->getClientOriginalName();
            $r->file('logo')->move('assets/images/', $r->logo->getClientOriginalName());
        }

        DB::table('usaha')->insert([
            'id_sektor'=> $r->id_sektor,
            'nama_usaha'=> $r->nama_usaha,
            'deskripsi'=> $r->deskripsi,
            'logo' => $filename,
             // 'slug' => Str::slug($r->nama_usaha),
        ]);
        return redirect('/usaha')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_usaha){
        if ($r != ''){
         $logo = $r->file('logo');
 
         if ($logo == '') {
            DB::table('usaha')->where('id_usaha', $id_usaha)->update([
                'id_sektor'=> $r->id_sektor,
                'nama_usaha'=> $r->nama_usaha,
                'deskripsi'=> $r->deskripsi,
                 // 'slug' => Str::slug($r->nama_usaha),
             ]);
         } else {
             //hapus foto lama
             $fotolama = DB::table('usaha')->where('id_usaha', $id_usaha)->first();
             if ($fotolama->logo !=''){
                 unlink('assets/images/'. $fotolama->logo);
             }
 
 
 
             $filename = $r->logo->getClientOriginalName();
             $r->file('logo')->move('assets/images/', $r->logo->getClientOriginalName());
 
            DB::table('usaha')->where('id_usaha', $id_usaha)->update([
                'id_sektor'=> $r->id_sektor,
                'nama_usaha'=> $r->nama_usaha,
                'deskripsi'=> $r->deskripsi,
                 // 'slug' => Str::slug($r->nama_usaha),  
                 'logo' => $filename
             ]);
         }
         return redirect('/usaha')->with('ubah','berhasil diedit');
        }
     }
    public function hapus($id_usaha){
         //hapus foto lama
         $fotolama = DB::table('usaha')->where('id_usaha', $id_usaha)->first();
         if ($fotolama->logo !=''){
             unlink('assets/images/'. $fotolama->logo);
         }
         
        DB::table('usaha')->where('id_usaha',$id_usaha)->delete();
        return redirect('/usaha')->with('hapus','Berhasil dihapus');
    }
}
