<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        //dd($request->all());
        $input=$request->all();
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if(auth()->user()->level=='mahasiswa'){
                return redirect('mahasiswa');
            }else if(auth()->user()->level=='dosen'){
                return redirect('dosen');
            }else if(auth()->user()->level=='admin'){
                return redirect('adminrpl');
            }
        }
        return redirect('/')->with('postlogin','Username atau Password Anda Salah, Silakan lakukan proses login kembali');
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/')->with('logout','Anda berhasil logout');
    }

}
