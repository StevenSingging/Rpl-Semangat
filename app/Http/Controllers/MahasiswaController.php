<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;

class MahasiswaController extends Controller
{
    //Dashboard Mahasiswa
    public function index(){
        return view('mahasiswa.dashboardmhs');
    }

    public function surattugasmhs(){
        return view('mahasiswa.surattugasmhs');
    }
    public function suratkegiatanmhs(){
        return view('mahasiswa.suratkegiatanmhs');
    }

    //Tampilan Surat Mahasiswa
    public function pengajuansuratmhs(){
        $psurat = PengajuanSurat::paginate();
        //return $psurat;
        return view('mahasiswa.pengajuansuratmhs',compact('psurat'));
    }

    //Tampilan Seluruh Surat Mahasiswa
    public function suratmasukmhs(){
        $psurat = PengajuanSurat::paginate(5);
        return view('mahasiswa.suratmasukmhs',compact('psurat'));
    }
    //CRUD Surat Mahasiswa

    public function tambahsuratmhs() {
        $psurat = PengajuanSurat::all();
        $users = User::all();
        return view('mahasiswa.tambahsuratmhs',compact('psurat','users'));
    }

    public function simpansuratmhs(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'nama_mitra' => 'required',
            'alamat_mitra' => 'required',
            'keterangan' => 'required',

        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nama_mitra.required' => 'Nama Mitra tidak boleh kosong',
            'alamat_mitra.required' => 'Alamat Mitra tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ]);
        //return $request;
        PengajuanSurat::create([
            'user_id' => $request -> user_id,
            'tanggal' => $request -> tanggal,
            'tujuan_surat' => $request -> tujuan_surat,
            'nama_mitra' => $request -> nama_mitra,
            'alamat_mitra' => $request -> alamat_mitra,
            'keterangan' => $request -> keterangan
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
