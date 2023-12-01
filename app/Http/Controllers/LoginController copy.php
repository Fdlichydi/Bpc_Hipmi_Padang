<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function aksilogin(Request $request){
        //cek login data
        $user = new AdminModel();
        $data_user = $user->CheckLoginAdmin($request->input('username'),
    $request->input('password'));

        if ($data_user){
            //masukan data login ke session
            $request->session()->put('nama',$data_user->nama);
            $request->session()->put('username',$data_user->username);
            $request->session()->put('password',$data_user->password);
            $request->session()->put('id_user',$data_user->id_user);
            $request->session()->put('foto',$data_user->foto);

            return redirect('/berita');
        } else{
            return redirect('/login')->with('login','Username atau Password Salah');
        }

    } 
    public function logout(Request $request){
        $request->session()->forget('nama');
        $request->session()->forget('username');
        $request->session()->forget('password');
        $request->session()->forget('id_user');
        $request->session()->forget('foto');

        return redirect('/');
    }
}
