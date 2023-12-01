<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengurusController extends Controller
{
    public function index(){
        
        $data =DB::table('pengurus')->join('jabatan','pengurus.id_jabatan','=','jabatan.id_jabatan') ->orderBy('id_pengurus','desc')->get();
        return view('backend.pengurus', [
        'pengurus'=>$data,
        'jabatan'=>DB::table('jabatan')->get()
    ]);
    }
    public function input(Request $r){
        $filename = null;
        if($r->foto){
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('assets/images/', $r->foto->getClientOriginalName());
        }

        DB::table('pengurus')->insert([
            'id_jabatan'=> $r->id_jabatan,
            'nama_pengurus'=> $r->nama_pengurus,
            'foto' => $filename,
             // 'slug' => Str::slug($r->judul),
        ]);
        return redirect('/pengurus')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_pengurus){
        if ($r != ''){
         $foto = $r->file('foto');
 
         if ($foto == '') {
            DB::table('pengurus')->where('id_pengurus', $id_pengurus)->update([
                'id_jabatan'=> $r->id_jabatan,
            'nama_pengurus'=> $r->nama_pengurus,
             ]);
         } else {
             //hapus foto lama
             $fotolama = DB::table('pengurus')->where('id_pengurus', $id_pengurus)->first();
             if ($fotolama->foto !=''){
                 unlink('assets/images/'. $fotolama->foto);
             }
 
             $filename = $r->foto->getClientOriginalName();
             $r->file('foto')->move('assets/images/', $r->foto->getClientOriginalName());
 
            DB::table('pengurus')->where('id_pengurus', $id_pengurus)->update([
                'id_jabatan'=> $r->id_jabatan,
            'nama_pengurus'=> $r->nama_pengurus,
            'foto' => $filename,
             ]);
         }
         return redirect('/pengurus')->with('ubah','berhasil diedit');
        }
     }
    public function hapus($id_pengurus){
         //hapus foto lama
         $fotolama = DB::table('pengurus')->where('id_pengurus', $id_pengurus)->first();
         if ($fotolama->foto !=''){
             unlink('assets/images/'. $fotolama->foto);
         }
         
        DB::table('pengurus')->where('id_pengurus',$id_pengurus)->delete();
        return redirect('/pengurus')->with('hapus','Berhasil dihapus');
    }
}
