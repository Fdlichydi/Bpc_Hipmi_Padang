<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index(){
        $data =DB::table('agenda')->get();
        
        return view('backend.agenda', [
        'agenda'=>$data]);
    }
    public function input(Request $r){
        $data['agenda'] =DB::table('agenda')->insert([
            'tgl'=> $r->tgl,
            'judul'=> $r->judul,
            'jam'=> $r->jam,
            'lokasi'=> $r->lokasi,
        ]);
        return redirect('/agenda')->with('tambah','Berhasil ditambah');
    }
    public function edit(Request $r, $id_agenda){
        DB::table('agenda')->where('id_agenda',$id_agenda)->update([
            'tgl'=> $r->tgl,
            'judul'=> $r->judul,
            'jam'=> $r->jam,
            'lokasi'=> $r->lokasi,
        ]);
        return redirect('/agenda')->with('ubah','Berhasil diedit');
    }
    public function hapus($id_agenda){
        DB::table('agenda')->where('id_agenda',$id_agenda)->delete();
        return redirect('/agenda')->with('hapus','Berhasil dihapus');
    }
    
}
