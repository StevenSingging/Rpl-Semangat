<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;
use App\Models\JenisSurat;

class MahasiswaController extends Controller
{
    //Dashboard Mahasiswa
    public function index(){
        return view('mahasiswa.dashboardmhs');
    }

    //Tampilan Surat Mahasiswa
    public function pengajuansuratmhs(){
        $psurat = PengajuanSurat::paginate();
        $jsurat = JenisSurat::paginate();
        //return $psurat;
        return view('mahasiswa.pengajuansuratmhs',compact('psurat','jsurat'));
    }

    //Tampilan Seluruh Surat Mahasiswa
    public function suratmasukmhs(){
        $psurat = PengajuanSurat::all();
        return view('mahasiswa.suratmasukmhs',compact('psurat'));
    }
    //CRUD Surat Mahasiswa
    public function surattugasmhs(){
        return view('mahasiswa.surattugasmhs');
    }
    public function suratkegiatanmhs(){
        return view('mahasiswa.suratkegiatanmhs');
    }

    public function simpansurattugasmhs(Request $request){
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
        return redirect('mahasiswa/pengajuansuratmhs');
    }

    public function viewsuratmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('mahasiswa.detailpsmhs',compact('psurat'));
    }

    public function editsuratmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('mahasiswa.editsuratmhs',compact('psurat'));
    }

    public function updatesuratmhs(Request $request,$id_per) {
        $psurat = PengajuanSurat::findorfail($id_per);
        $psurat->update($request->all());
        return redirect('/mahasiswa/pengajuansuratmhs')->with('toast_success','Data Berhasil Update');
    }


    public function deletesuratmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        $psurat->delete();
        return back();
    }

    //Cari Surat
    public function searchmhs(Request $request) {
        $cari = $request->key;
        $psurat = PengajuanSurat::where('tujuan_surat','like',"%".$cari."%")
        ->paginate();
        return view('mahasiswa.pengajuansuratmhs',compact('psurat'));
    }

}
