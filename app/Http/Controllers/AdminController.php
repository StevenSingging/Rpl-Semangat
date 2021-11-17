<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;

class AdminController extends Controller
{
    //Dashboard Admin
    public function index(){
        return view('adminrpl.dashboardadm');
    }
    public function skdekanadm(){
        return view('adminrpl.skdekanadm');
    }
    public function suratketmhsadm(){
        return view('adminrpl.suratketmhsadm');
    }
    public function suratundanganadm(){
        return view('adminrpl.suratundanganadm');
    }
    public function surattugasadm(){
        return view('adminrpl.surattugasadm');
    }
    public function beritaacaraadm(){
        return view('adminrpl.beritaacaraadm');
    }
    public function arsipsuratadm(){
        return view('adminrpl.arsipsuratadm');
    }

    //Tampilan Surat adminrpl
    public function pengajuansuratadm(){
        $asurat = PengajuanSurat::where('status',null)
        ->paginate(5);
        return view('adminrpl.pengajuansuratadm',compact('asurat'));
    }

    public function suratkeluaradm(){
        $asurat = PengajuanSurat::where('validasi',1)
        ->paginate(5);
        return view('adminrpl.suratkeluaradm',compact('asurat'));
    }

    public function kirimsuratadm() {
        $asurat = PengajuanSurat::where('status',1)
        ->paginate(5);
        return view('adminrpl.kirimsuratadm',compact('asurat'));
    }
    //CRUD Surat adminrpl

    public function berhasilkirimadm(Request $request){
        //dd($request->all());
        PengajuanSurat::create([
            'niuser' => $request -> niuser,
            'tanggal' => $request -> tanggal,
            'tujuan_surat' => $request -> tujuan_surat,
            'nama_mitra' => $request -> nama_mitra,
            'alamat_mitra' => $request -> alamat_mitra,
            'keterangan' => $request -> keterangan
        ]);
    return redirect('adminrpl/pengajuansuratadm');
    }

    public function tambahsuratadm() {
        return view('adminrpl.tambahsuratadm');
    }

    public function simpansuratadm(Request $request){
        //dd($request->all());
        PengajuanSurat::create([
            'niuser' => $request -> niuser,
            'tanggal' => $request -> tanggal,
            'tujuan_surat' => $request -> tujuan_surat,
            'nama_mitra' => $request -> nama_mitra,
            'alamat_mitra' => $request -> alamat_mitra,
            'keterangan' => $request -> keterangan
        ]);
    return redirect('adminrpl/pengajuansuratadm');
    }

    public function viewsuratadm($id) {
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.detailpsadm',compact('asurat'));
    }

    public function editsuratadm($id) {
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratadm',compact('asurat'));
    }

    public function updatesuratadm(Request $request,$id_per) {
        $asurat = PengajuanSurat::findorfail($id_per);
        $asurat->update($request->all());
        return redirect('/adminrpl/pengajuansuratadm')->with('toast_success','Data Berhasil Update');
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
}
