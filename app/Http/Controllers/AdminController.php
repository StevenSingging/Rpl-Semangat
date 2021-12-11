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
        $asurat = PengajuanSurat::where('status',null)->paginate(5);
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
            'user_id' => $request -> id,
            'status' => 1,
            'jenis_id' => 2,
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
            'sebagai' => $request -> sebagai,
            'waktusls' => $request -> waktusls,
            'tema' => $request -> tema,
            'nama_mitra' => $request -> nama_mitra,
            'sebagai' => $request -> sebagai,
            'lokasi' => $request -> lokasi,
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/pengajuansuratadm');
    }

    public function simpandaftarhadir(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'sebagai' => 'required',
            'tema' => 'required',
            'nama_mitra' => 'required',
            'lokasi' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'sebagai.required' => 'Tanggal tidak boleh kosong',
            'tema.required' => 'Tanggal tidak boleh kosong',
            'nama_mitra.required' => 'Mitra Kegiatan tidak boleh kosong',
            'lokasi.required' => 'Lokasi Kegiatan tidak boleh kosong',
        ]);
        //return $request;
        $niang = implode(",", $request->get('ni_ang'));
        $nmang = implode(",", $request->get('nama_ang'));
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 3,
            'status' => 1,
            'sebagai' => $request -> sebagai,
            'tanggal' => $request -> tanggal,
            'nama_mitra' => $request -> nama_mitra,
            'tema' => $request -> tema,
            'lokasi' => $request -> lokasi,
            'ni_ang' => $niang,
            'nama_ang' => $nmang
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/suratkeluaradm');
    }

    public function simpantugaspribadi(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'sebagai' => 'required',
            'tema' => 'required',
            'nama_mitra' => 'required',
            'keterangan' => 'required',
            'lokasi' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'sebagai.required' => 'Tanggal tidak boleh kosong',
            'tema.required' => 'Tanggal tidak boleh kosong',
            'nama_mitra.required' => 'Mitra Kegiatan tidak boleh kosong',
            'keterangan.required' => 'Mitra Kegiatan tidak boleh kosong',
            'lokasi.required' => 'Lokasi Kegiatan tidak boleh kosong',
        ]);
        //return $request;
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 4,
            'status' => 1,
            'sebagai' => $request -> sebagai,
            'tanggal' => $request -> tanggal,
            'nama_mitra' => $request -> nama_mitra,
            'keterangan' => $request -> keterangan,
            'tema' => $request -> tema,
            'lokasi' => $request -> lokasi,
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/suratkeluaradm');
    }

    public function simpantugaskelompok(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'sebagai' => 'required',
            'tema' => 'required',
            'nama_mitra' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'sebagai.required' => 'Tanggal tidak boleh kosong',
            'tema.required' => 'Tanggal tidak boleh kosong',
            'nama_mitra.required' => 'Mitra Kegiatan tidak boleh kosong',
            'lokasi.required' => 'Lokasi Kegiatan tidak boleh kosong',
            'keterangan.required' => 'Mitra Kegiatan tidak boleh kosong',
        ]);
        //return $request;
        $niang = implode(",", $request->get('ni_ang'));
        $nmang = implode(",", $request->get('nama_ang'));
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 4,
            'status' => 1,
            'sebagai' => $request -> sebagai,
            'tanggal' => $request -> tanggal,
            'nama_mitra' => $request -> nama_mitra,
            'tema' => $request -> tema,
            'lokasi' => $request -> lokasi,
            'keterangan' => $request -> keterangan,
            'ni_ang' => $niang,
            'nama_ang' => $nmang
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/suratkeluaradm');
    }

    public function simpanberitaacara(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'tema' => 'required',
            'peserta' => 'required',
            'keterangan' => 'required',
            'lokasi' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'tema.required' => 'Tanggal tidak boleh kosong',
            'peserta.required' => 'Mitra Kegiatan tidak boleh kosong',
            'keterangan.required' => 'Mitra Kegiatan tidak boleh kosong',
            'lokasi.required' => 'Lokasi Kegiatan tidak boleh kosong',
        ]);
        //return $request;
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 5,
            'status' => 1,
            'tanggal' => $request -> tanggal,
            'peserta' => $request -> nama_mitra,
            'keterangan' => $request -> keterangan,
            'tema' => $request -> tema,
            'lokasi' => $request -> lokasi,
        ]);
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('adminrpl/suratkeluaradm');
    }

    public function viewsuratadm($id) {
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.detailpsadm',compact('asurat'));
    }

    public function editsuratb($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        return view('adminrpl.editsuratb',compact('asurat','pejabat'));
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

    public function validasisuratap($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        $exp = $asurat->ni_ang;
        $exp1 = explode(',',$exp);
        $esp = $asurat->nama_ang;
        $esp1 = explode(',',$esp);
        
        return view('adminrpl.validasisuratap',compact('asurat','pejabat','exp1','esp1'));
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

    public function validasisuratcdf($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        $exp = $asurat->ni_ang;
        $exp1 = explode(',',$exp);
        $esp = $asurat->nama_ang;
        $esp1 = explode(',',$esp);
        return view('adminrpl.validasisuratcdf',compact('asurat','pejabat','exp1','esp1'));
    }

    public function validasisuratdk($id) {
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        $pejabat = Pejabat::all();
        $asurat = PengajuanSurat::findorfail($id);
        $exp = $asurat->ni_ang;
        $exp1 = explode(',',$exp);
        $esp = $asurat->nama_ang;
        $esp1 = explode(',',$esp);
        return view('adminrpl.validasisuratdk',compact('asurat','pejabat','exp1','esp1'));
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

    // public function autocomplete(Request $request){
    //     $getFields = User::all()
    //     ->where('niuser',$request->get('niuser'))->first();
    //     return json_encode($getFields);
    //     //dd($getFields);
    // }

    public function autocomplete(Request $request)
{
    try {
        $getFields = User::all()
        ->where('niuser',$request->get('niuser'))->first();
        // here you could check for data and throw an exception if not found e.g.
        // if(!$getFields) {
        //     throw new \Exception('Data not found');
        // }
        return response()->json($getFields, 200);
    } catch (\Exception $e) {
        return response()->json(['message' => $e->getMessage()], 500);
    }
}
}