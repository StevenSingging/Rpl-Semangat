<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;

class DosenController extends Controller
{
    //Dashboard Dosen
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
        return view('dosen.dashboarddsn',compact('countstp','countstk','countskm'));
    }

    public function pengajuansuratdsn(){
        $dsurat = PengajuanSurat::paginate();
        //return $psurat;
        return view('dosen.pengajuansuratdsn',compact('dsurat'));
    }

    //CRUD Surat Mahasiswa
    public function surattugasdsn(){
        return view('dosen.surattugasdsn');
    }
    public function suratkegiatandsn(){
        return view('dosen.suratkegiatandsn');
    }

    public function simpansurattugasdsn(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'sebagai' => 'required',
            'nama_mitra' => 'required',
            'tema' => 'required',
            'keterangan' => 'required',
            'lokasi' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'sebagai.required' => 'Sebagai tidak boleh kosong',
            'nama_mitra.required' => 'Mitra Kegiatan tidak boleh kosong',
            'tema.required' => 'Tema Kegiatan tidak boleh kosong',
            'keterangan.required' => 'Keterangan Kegiatan tidak boleh kosong',
            'lokasi.required' => 'Lokasi Kegiatan tidak boleh kosong',
        ]);
        //return $request;
        $niang = implode(",", $request->get('ni_ang'));
        $nmang = implode(",", $request->get('nama_ang'));
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 4,
            'tanggal' => $request -> tanggal,
            'sebagai' => $request -> sebagai,
            'nama_mitra' => $request -> nama_mitra,
            'tema' => $request -> tema,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
            'ni_ang' => $niang,
            'nama_ang' => $nmang
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('dosen/pengajuansuratdsn');
    }

    public function simpansuratkegiatandsn(Request $request){
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 2
        ]);
        return redirect('dosen/pengajuansuratdsn');
    }

    public function viewsuratdsn($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('dosen.detailpsdsn',compact('psurat'));
    }

    public function editsurattgsdsn($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('dosen.editsurattgsdsn',compact('psurat'));
    }

    public function updatesuratdsn(Request $request,$id_per) {
        $psurat = PengajuanSurat::findorfail($id_per);
        $psurat->update($request->all());
        return redirect('/dosen/pengajuansuratdsn')->with('toast_success','Data Berhasil Update');
    }


    public function deletesuratdsn($id) {
        $psurat = PengajuanSurat::findorfail($id);
        $psurat->delete();
        return back();
    }

    public function arsipstpdsn(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('ni_ang',null)
        ->where('status','1')
        ->paginate();
        //return $psurat;
        return view('dosen.arsiptpdsn',compact('psurat'));
    }

    public function arsipstkdsn(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->whereNotNull('ni_ang')
        ->where('status','1')
        ->paginate();
        //return $psurat;
        return view('dosen.arsiptkdsn',compact('psurat'));
    }

    public function arsipskmdsn(){
        $psurat = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('status','1')
        ->paginate();
        //return $psurat;
        return view('dosen.arsipskmdsn',compact('psurat'));
    }

    //Cari Surat
    public function searchdsn(Request $request) {
        $cari = $request->key;
        $psurat = PengajuanSurat::where('jenis_surat','like',"%".$cari."%")
        ->paginate();
        return view('mahasiswa.pengajuansuratmhs',compact('psurat'));
    }

}

