<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data =DB::table('users')->get();
        
        return view('backend.user', [
        'user'=>$data]);
    }
    public function input(Request $r){

       
        DB::table('users')->insert([
            'email'=> $r->email,
            'password'=> Hash::make($r->password) ,
            'name'=> $r->name,
            'email_verified_at'=> $r->email_verified_at,
            'remember_token'=> $r->remember_token,
            'created_at'=> $r->created_at,
            'updated_at'=> $r->updated_at,
            
        ]);

        return redirect('/user')->with('tambah','berhasil ditambah');
    }
    public function edit(Request $r, $id){
        
 
            DB::table('users')->where('id', $id)->update([
                'email'=> $r->email,
            'password'=> Hash::make($r->password) ,
            'name'=> $r->name,
            'email_verified_at'=> $r->email_verified_at,
            'remember_token'=> $r->remember_token,
            'created_at'=> $r->created_at,
            'updated_at'=> $r->updated_at,
             ]);
         
         return redirect('/user')->with('ubah','berhasil diedit');
        }
     
     public function hapus($id){
         DB::table('users')->where('id',$id)->delete();
         return redirect('/user')->with('hapus','berhasil dihapus');
     }
}
