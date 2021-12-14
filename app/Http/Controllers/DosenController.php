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
        ->whereNull('ni_ang')
        ->where('user_id',Auth()->user()->id)
        ->where('status','1')
        ->count();
        $countstk = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('status','1')
        ->where('user_id',Auth()->user()->id)
        ->count();
        $countskm = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('status','1')
        ->where('user_id',Auth()->user()->id)
        ->count();
        $countbc = PengajuanSurat::where('jenis_id','5')
        ->where('validasi','1')
        ->where('status','1')
        ->where('user_id',Auth()->user()->id)
        ->count();
        return view('dosen.dashboarddsn',compact('countstp','countstk','countskm','countbc'));
    }

    public function pengajuansuratdsn(){
        $dsnsurat = PengajuanSurat::whereNull('status')
        ->paginate();
        //return $psurat;
        return view('dosen.pengajuansuratdsn',compact('dsnsurat'));
    }

    //CRUD Surat Mahasiswa
    public function surattugaskdsn(){
        return view('dosen.surattugaskdsn');
    }
    public function surattugaspdsn(){
        return view('dosen.surattugaspdsn');
    }
    public function suratkegiatandsn(){
        return view('dosen.suratkegiatandsn');
    }

    public function simpansurattugaskdsn(Request $request){
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
    public function simpansurattugaspdsn(Request $request){
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
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 4,
            'tanggal' => $request -> tanggal,
            'sebagai' => $request -> sebagai,
            'nama_mitra' => $request -> nama_mitra,
            'tema' => $request -> tema,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
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

    public function editsurattgspdsn($id) {
        $psurat = PengajuanSurat::find($id);
        
        return view('dosen.editsurattgspdsn',compact('psurat')); 
    }
    public function editsurattgskdsn($id) {
        $psurat = PengajuanSurat::findorfail($id);
        $tgs = $psurat->ni_ang;
        $tgs1 = explode(',',$tgs);
        $ecp = $psurat->nama_ang;
        $esp1 = explode(',',$ecp);
        return view('dosen.editsurattgskdsn',compact('psurat','tgs1','esp1'));
    }

    public function updatesurattgskdsn(Request $request,$id) {
        $niang = implode(",", $request->get('ni_ang'));
        $nmang = implode(",", $request->get('nama_ang'));
        $psurat = PengajuanSurat::find($id);
        $psurat->tanggal = $request->tanggal;
        $psurat->nama_mitra = $request->nama_mitra;
        $psurat->tema = $request->tema;
        $psurat->keterangan = $request->keterangan;
        $psurat->lokasi = $request->lokasi;
        $psurat->ni_ang = $niang;
        $psurat->nama_ang = $nmang;
        $psurat->save();
        return redirect('/dosen/pengajuansuratdsn')->with('toast_success','Data Berhasil Update');
    }

    public function updatesurattgspdsn(Request $request,$id) {
        $psurat = PengajuanSurat::find($id);
        $psurat->tanggal = $request->tanggal;
        $psurat->nama_mitra = $request->nama_mitra;
        $psurat->tema = $request->tema;
        $psurat->keterangan = $request->keterangan;
        $psurat->lokasi = $request->lokasi;
        $psurat->save();
        return redirect('/dosen/pengajuansuratdsn')->with('toast_success','Data Berhasil Update');
    }


    public function deletesuratdsn($id) {
        $psurat = PengajuanSurat::findorfail($id);
        $psurat->delete();
        return back();
    }

    public function arsipstpdsn(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->whereNotNull('validasi')
        ->whereNull('ni_ang')
        ->whereNotNull('status')
        ->paginate();
        //return $psurat;
        return view('dosen.arsiptpdsn',compact('psurat'));
    }

    public function arsipstkdsn(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->whereNotNull('validasi')
        ->whereNotNull('ni_ang')
        ->whereNotNull('status')
        ->paginate();
        //return $psurat;
        return view('dosen.arsiptkdsn',compact('psurat'));
    }

    public function arsipskmdsn(){
        $psurat = PengajuanSurat::where('jenis_id','2')
        ->whereNotNull('validasi')
        ->whereNotNull('status')
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

    public function downloadsurattgsk($id){
        $surat['surat'] = PengajuanSurat::where('id',$id)->first();
        //$asurat = ['asurat' => $this-> PengajuanSurat::alldata()] ;
        $html= view('surattugaskel')->with($surat);
        //$html= view('surattugaspribadi',$asurat);
        $dompdf = new Dompdf();
        //  $dompdf->loadHtml($aData['html']);
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');
        
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream('surat_tugask_'.$id.'.pdf');
    }

    public function downloadsurattgsp($id){
        $asurat['asurat'] = PengajuanSurat::where('id',$id)->first();
        //$asurat = ['asurat' => $this-> PengajuanSurat::alldata()] ;

        $html= view('surattugaspribadi')->with($asurat);
        //$html= view('surattugaspribadi',$asurat);
        $dompdf = new Dompdf();
        //  $dompdf->loadHtml($aData['html']);
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');
        
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream('surat_tugasp_'.$id.'.pdf');
    }

    public function downloadsuratk($id){
        $asurat['suratk'] = PengajuanSurat::where('id',$id)->first();
        //$asurat = ['asurat' => $this-> PengajuanSurat::alldata()] ;

        $html= view('suratkegmhs')->with($asurat);
        //$html= view('surattugaspribadi',$asurat);
        $dompdf = new Dompdf();
        //  $dompdf->loadHtml($aData['html']);
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');
        
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream('surat_keterangan_'.$id.'.pdf');
    }

}

