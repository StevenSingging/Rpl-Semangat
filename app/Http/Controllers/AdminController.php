<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;
use App\Models\Pejabat;

class AdminController extends Controller
{
    //Dashboard Admin
    public function index(){
        $countstp = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('ni_ang',null)
        ->where('status','1')
        ->count();
        $countstk = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        $countskm = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        return view('adminrpl.dashboardadm',compact('countstp','countstk','countskm'));
    }

    //Tampilan Surat adminrpl
    public function pengajuansuratadm(){
        $asurat = PengajuanSurat::where('status',null)->paginate(5);
        return view('adminrpl.pengajuansuratadm',compact('asurat'));
    }

    public function suratkeluaradm(){
        $asurat = PengajuanSurat::where('status',1)
        ->paginate(5);
        return view('adminrpl.suratkeluaradm',compact('asurat'));
    }

    public function tambahsuratadm() {
        return view('adminrpl.tambahsuratadm');
    }


    public function viewsuratadm($id) {
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.detailpsadm',compact('asurat'));
    }

    public function editsurata($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsurata',compact('asurat','pejabat'));
    }

    public function editsuratb($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratb',compact('asurat','pejabat'));
    }

    public function editsuratc($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratc',compact('asurat','pejabat'));
    }

    public function editsuratd($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratd',compact('asurat','pejabat'));
    }

    public function editsurate($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsurate',compact('asurat','pejabat'));
    }

    public function validasisurata($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisurata',compact('asurat','pejabat'));
    }

    public function validasisuratb($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisuratb',compact('asurat','pejabat'));
    }

    public function validasisuratc($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisuratc',compact('asurat','pejabat'));
    }

    public function validasisuratd($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisuratd',compact('asurat','pejabat'));
    }

    public function validasisurate($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisurate',compact('asurat','pejabat'));
    }

    public function updatesuratadm(Request $request,$id) {
        $asurat = PengajuanSurat::findorfail($id);
        $asurat->update($request->all());
        return redirect('/adminrpl/pengajuansuratadm')->with('toast_success','Data Berhasil Update');
    }

    public function updatevalidasisuratadm(Request $request,$id) {
        $asurat = PengajuanSurat::findorfail($id);
        $asurat->update($request->all());
        return redirect('/adminrpl/suratkeluaradm')->with('toast_success','Data Berhasil Update');
    }


    public function deletesuratadm($id) {
        $asurat = PengajuanSurat::findorfail($id);
        $asurat->delete();
        return back();
    }

    //Cari Surat
    public function searchadm(Request $request) {
        $cari = $request->key;
        $asurat = PengajuanSurat::where('tujuan_surat','like',"%".$cari."%")->paginate();
        return view('adminrpl.pengajuansuratadm',compact('asurat'));
    }

    public function surattugas(){
        $asurat = PengajuanSurat::paginate(5);
        return view('adminrpl.surattugas',compact('asurat'));
    }

    public function validasi($id) {
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasi',compact('asurat'));
    }
}