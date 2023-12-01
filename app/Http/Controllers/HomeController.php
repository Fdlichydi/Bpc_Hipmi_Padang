<?php

namespace App\Http\Controllers;

use App\Models\UsahaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
    $usaha = UsahaModel::count();


        return view('frontend.home', [
            'berita'=>DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori') ->orderBy('id_berita','desc')->get(),
            'kategori'=>DB::table('kategori')->get(),
            'jabatan'=>DB::table('jabatan')->get(),
            'pengurus'=>DB::table('pengurus')->join('jabatan','pengurus.id_jabatan','=','jabatan.id_jabatan') ->orderBy('id_pengurus','desc')->get(),
            'sektor'=>DB::table('sektor')->get(),
            'usaha1'=>DB::table('usaha')->take(9)->get(),
            'usaha'=>DB::table('usaha')->join('sektor','usaha.id_sektor','=','sektor.id_sektor') ->orderBy('id_usaha','desc')->get(),
            ]);
    }
    public function berita(){
        // dd(request()->cari);
        if (request()->cari){
            $berita = DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori')->where('berita.judul','like','%'.request()->cari.'%')->orderBy('id_berita','desc') -> get();
        } else {
            $berita = DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori')->orderBy('id_berita','desc')-> get();
        }
        

        return view('frontend.berita', [
            'berita'=>$berita,
            'kategori'=>DB::table('kategori')->get(),
            'agenda'=>DB::table('agenda')->orderBy('id_agenda','desc')->take(4)->get(),
            
        ]);
    }

    public function lihat($slug){
        return view('frontend.lihat',[
            'berita'=> DB::table('berita')->where('slug',$slug)->join('kategori','berita.id_kategori','=','kategori.id_kategori')->first(),
            'kategori' => DB::table('kategori')->get(),
            'agenda'=>DB::table('agenda')->take(4)->get(),
            'berita1'=>DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori') ->orderBy('id_berita','desc')->take(3)->get(),
        ]);
    }
    public function kategori($nama){
        if (request()->cari){
            $berita1 = DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori')->where('judul','like','%'.request()->cari.'%')->orderBy('id_berita','desc') -> get();
        } else {
            $berita1 = DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori')->orderBy('id_berita','desc')-> get();
        }

        return view('frontend.kategori',[
            'berita'=> DB::table('berita')->where('nama',$nama)->join('kategori','berita.id_kategori','=','kategori.id_kategori')->get(),
            'kategori' => DB::table('kategori')->get(),
            'agenda'=>DB::table('agenda')->take(4)->get(),
            'berita1'=>$berita1,
        ]);
    }
    public function usaha(){
        return view('frontend.usaha', [
            'usaha'=>DB::table('usaha')->join('sektor','usaha.id_sektor','=','sektor.id_sektor') ->orderBy('id_usaha','desc')->get(),
            'sektor'=>DB::table('sektor')->get(),
        ]);
    }
    public function sektor($nama){
        return view('frontend.sektor',[
            'usaha'=>DB::table('usaha')->where('nama',$nama)->join('sektor','usaha.id_sektor','=','sektor.id_sektor') ->orderBy('id_usaha','desc')->get(),
            'sektor'=>DB::table('sektor')->get(),
        ]);
    }
    public function ttg(){
        return view('frontend.ttg', [
            'berita'=>DB::table('berita')->join('kategori','berita.id_kategori','=','kategori.id_kategori') ->orderBy('id_berita','desc')->get(),
            'kategori'=>DB::table('kategori')->get(),
            'jabatan'=>DB::table('jabatan')->get(),
            'pengurus'=>DB::table('pengurus')->join('jabatan','pengurus.id_jabatan','=','jabatan.id_jabatan') ->orderBy('id_pengurus','asc')->get(),
            'sektor'=>DB::table('sektor')->get(),
            'usaha'=>DB::table('usaha')->join('sektor','usaha.id_sektor','=','sektor.id_sektor') ->orderBy('id_usaha','desc')->get(),
            ]);
    }
}
