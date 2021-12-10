<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;
use App\Models\Pejabat;
use App\Models\JenisSurat;
use Illuminate\Support\Carbon;
class AdminController extends Controller
{
    //Dashboard Admin
    public function index(){
        $countst = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        $countsp = PengajuanSurat::where('jenis_id','1')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        $countskm = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        $countsbc = PengajuanSurat::where('jenis_id','5')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        $countsud = PengajuanSurat::where('jenis_id','3')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        return view('adminrpl.dashboardadm',compact('countst','countsp','countskm','countsud','countsbc')); 
    }

    //Tampilan Surat adminrpl
    public function pengajuansuratadm(){
        $asurat = PengajuanSurat::where('status',null)->paginate();
        return view('adminrpl.pengajuansuratadm',compact('asurat'));
    }

    public function suratkeluaradm(){
        $asurat = PengajuanSurat::where('status',1)
        ->whereNull('validasi')
        ->paginate();
        return view('adminrpl.suratkeluaradm',compact('asurat'));
    }

    public function tambahsuratskdknadm() {
        return view('adminrpl.tambahskdekan');
    }

    public function tambahsuratpsadm() {
        return view('adminrpl.tambahsuratpersonalia');
    }

    public function tambahsuratkadm() {
        return view('adminrpl.tambahsuratketerangan');
    }

    public function tambahsuratundadm() {
        return view('adminrpl.tambahsuratundangan');
    }

    public function tambahsuratdhadm() {
        return view('adminrpl.tambahsuratdaftarhadir');
    }

    public function tambahsurattgspadm() {
        return view('adminrpl.tambahtgsp');
    }

    public function tambahsurattgskadm() {
        return view('adminrpl.tambahtgsk');
    }

    public function tambahsuratbcadm() {
        return view('adminrpl.tambahbc');
    }

    public function simpanpersonalia(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'nama_mitra' => 'required',
            'keterangan' => 'required',
            'lokasi' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nama_mitra.required' => 'Mitra Kegiatan tidak boleh kosong',
            'keterangan.required' => 'Keterangan Kegiatan tidak boleh kosong',
            'lokasi.required' => 'Lokasi Kegiatan tidak boleh kosong',
        ]);
        //return $request;
        $niang = implode(",", $request->get('ni_ang'));
        $nmang = implode(",", $request->get('nama_ang'));
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 1,
            'status' => 1,
            'tanggal' => $request -> tanggal,
            'nama_mitra' => $request -> nama_mitra,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
            'ni_ang' => $niang,
            'nama_ang' => $nmang
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/pengajuansuratadm');
    }

    public function simpanketerangan(Request $request){
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'status' => 1,
            'jenis_id' => 2,
            'tanggal' => $request -> tanggal,
            'nama_mitra' => $request -> nama_mitra,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
        ]);
        return redirect('adminrpl/pengajuansuratadm');
    }

    public function simpanundangan(Request $request){
        //return $request;
        //dd($request->all());
        PengajuanSurat::create([
            
            'user_id' => $request -> user() -> id,
            'jenis_id' => 3,
            'status' => 1,
            'tanggal' => $request -> tanggal,
            'waktuml' => Carbon::createFromFormat('H:i', $request->waktuml),
            'waktusls' => Carbon::createFromFormat('H:i', $request->waktusls),
            'tema' => $request -> tema,
            'nama_mitra' => $request -> nama_mitra,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/pengajuansuratadm');
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

    public function editsuratdp($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratdp',compact('asurat','pejabat'));
    }

    public function editsuratdk($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratdk',compact('asurat','pejabat'));
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

    public function validasisuratdk($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisuratdk',compact('asurat','pejabat'));
    }

    public function validasisuratdp($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisuratdp',compact('asurat','pejabat'));
    }

    public function validasisurate($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.validasisurate',compact('asurat','pejabat'));
    }

    public function updatesuratadm(Request $request,$id) {
        $asurat = PengajuanSurat::find($id);
        $asurat->update($request->all());
        return redirect('/adminrpl/pengajuansuratadm')->with('toast_success','Data Berhasil Update');
    }

    public function updatevalidasisuratadm(Request $request,$id) {
        $asurat = PengajuanSurat::find($id);
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

    public function autocomplete(Request $request){
        $getFields = User::all()
        ->where('niuser',$request->get('niuser'))->first();
        return json_encode($getFields);
    }
}