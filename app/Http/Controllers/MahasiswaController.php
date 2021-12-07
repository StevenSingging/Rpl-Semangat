<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;
use App\Models\JenisSurat;
use Dompdf\Dompdf;
class MahasiswaController extends Controller
{
    //Dashboard Mahasiswa
    public function index(){
        $countstp = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('ni_ang',null)
        ->where('status','1')
        ->count();
        $countstk = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('status','1')
        ->whereNotNull('ni_ang')
        ->count();
        $countskm = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('status','1')
        ->count();
        return view('mahasiswa.dashboardmhs',compact('countstp','countstk','countskm'));
    }

    //Tampilan Surat Mahasiswa
    public function pengajuansuratmhs(){
        $psurat = PengajuanSurat::paginate();
        //return $psurat;
        return view('mahasiswa.pengajuansuratmhs',compact('psurat'));
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
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('mahasiswa/pengajuansuratmhs');
    }

    public function simpansuratkegiatanmhs(Request $request){
        PengajuanSurat::create([
            'user_id' => $request -> user() -> id,
            'jenis_id' => 2
        ]);
        return redirect('mahasiswa/pengajuansuratmhs');
    }

    public function viewsuratmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('mahasiswa.detailpsmhs',compact('psurat'));
    }

    public function editsurattgsmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('mahasiswa.editsurattgsmhs',compact('psurat'));
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

    public function arsipstpmhs(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('ni_ang',null)
        ->where('status','1')
        ->paginate();
        //return $psurat;
        return view('mahasiswa.arsipstpmhs',compact('psurat'));
    }

    public function arsipstkmhs(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->whereNotNull('ni_ang')
        ->where('status','1')
        ->paginate();
        //return $psurat;
        return view('mahasiswa.arsipstkmhs',compact('psurat'));
    }

    public function arsipskmmhs(){
        $psurat = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('status','1')
        ->paginate();
        //return $psurat;
        return view('mahasiswa.arsipkmmhs',compact('psurat'));
    }

    //Cari Surat
    public function searchmhs(Request $request) {
        $cari = $request->key;
        $psurat = PengajuanSurat::where('jenis_surat','like',"%".$cari."%")
        ->paginate();
        return view('mahasiswa.pengajuansuratmhs',compact('psurat'));
    }

    public function downloadsurattgsp($id){
        $asurat = PengajuanSurat::all();
        //$asurat = ['asurat' => $this-> PengajuanSurat::alldata()] ;

        $html= view('surattugaspribadi',['asurat'=>$asurat]);
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
        $dompdf->stream('surat_tugas_'.$id.'.pdf');
    }

}