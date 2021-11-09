<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;

class DosenController extends Controller
{
    //Dashboard Dosen
    public function index(){
        return view('dosen.dashboarddsn');
    }

    public function surattugasdsn(){
        return view('dosen.surattugasdsn');
    }
    public function skdekan(){
        return view('dosen.skdekan');
    }
    public function arsipsuratdsn(){
        return view('dosen.arsipsuratdsn');
    }

    //Tampilan Surat Dosen
    public function pengajuansuratdsn(){
        $dsurat = PengajuanSurat::where('niuser','301')->paginate(5);
        return view('dosen.pengajuansuratdsn',compact('dsurat'));
    }

    //CRUD Surat Dosen

    public function tambahsuratdsn() {
        return view('dosen.tambahsuratdsn');
    }

    public function simpansuratdsn(Request $request){
        //dd($request->all());
        PengajuanSurat::create([
            'niuser' => $request -> niuser,
            'tanggal' => $request -> tanggal,
            'tujuan_surat' => $request -> tujuan_surat,
            'nama_mitra' => $request -> nama_mitra,
            'alamat_mitra' => $request -> alamat_mitra,
            'keterangan' => $request -> keterangan
        ]);
    return redirect('dosen/pengajuansuratdsn');
    }

    public function viewsuratdsn($id) {
        $dsurat = PengajuanSurat::findorfail($id);
        return view('dosen.detailpsdsn',compact('dsurat'));
    }

    public function editsuratdsn($id) {
        $dsurat = PengajuanSurat::findorfail($id);
        return view('dosen.editsuratdsn',compact('dsurat'));
    }

    public function updatesuratdsn(Request $request,$id_per) {
        $dsurat = PengajuanSurat::findorfail($id_per);
        $dsurat->update($request->all());
        return redirect('/dosen/pengajuansuratdsn')->with('toast_success','Data Berhasil Update');
    }


    public function deletesuratdsn($id) {
        $dsurat = PengajuanSurat::findorfail($id);
        $dsurat->delete();
        return back();
    }

    //Cari Surat
    public function searchdsn(Request $request) {
        $cari = $request->key;
        $dsurat = PengajuanSurat::where('tujuan_surat','like',"%".$cari."%")->paginate();
        return view('dosen.pengajuansuratdsn',compact('dsurat'));
    }

    public function semuaarsipsuratdsn(){
        return view('dosen.semuaarsipsuratdsn');
    }
}

