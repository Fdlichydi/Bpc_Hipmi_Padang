<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data =DB::table('user')->get();
        
        return view('backend.user', [
        'user'=>$data]);
    }
    public function input(Request $r){

        $filename = null;
        if($r->foto){
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('assets/images/', $r->foto->getClientOriginalName());
        }

        DB::table('user')->insert([
            'username'=> $r->username,
            'password'=> Hash::make($r->password) ,
            'nama'=> $r->nama,
            'no'=> $r->no,
            'foto' => $filename
        ]);

        return redirect('/user')->with('tambah','berhasil ditambah');
    }
    public function edit(Request $r, $id_user){
        if ($r != ''){
         $foto = $r->file('foto');
 
         if ($foto == '') {
            DB::table('user')->where('id_user', $id_user)->update([
                'username'=> $r->username,
                'password'=>  Hash::make($r->password) ,
                'nama'=> $r->nama,
                'no'=> $r->no,
             ]);
         } else {
            //hapus foto lama
            $fotolama = DB::table('user')->where('id_user', $id_user)->first();
            if ($fotolama->foto !=''){
                unlink('assets/images/'. $fotolama->foto);
            }


             $filename = $r->foto->getClientOriginalName();
             $r->file('foto')->move('assets/images/', $r->foto->getClientOriginalName());
 
            DB::table('user')->where('id_user', $id_user)->update([
                'username'=> $r->username,
                'password'=>  Hash::make($r->password) ,
                'nama'=> $r->nama,
                'no'=> $r->no,
                'foto' => $filename
             ]);
         }
         return redirect('/user')->with('ubah','berhasil diedit');
        }
     }
     public function hapus($id_user){
         DB::table('user')->where('id_user',$id_user)->delete();
         return redirect('/user')->with('hapus','berhasil dihapus');
     }
}
