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
        ->whereNull('ni_ang')
        ->where('user_id',Auth()->user()->id)
        ->where('status','1')
        ->count();
        $countstk = PengajuanSurat::where('jenis_id','4')
        ->where('validasi','1')
        ->where('user_id',Auth()->user()->id)
        ->where('status','1')
        ->whereNotNull('ni_ang')
        ->count();
        $countskm = PengajuanSurat::where('jenis_id','2')
        ->where('validasi','1')
        ->where('user_id',Auth()->user()->id)
        ->where('status','1')
        ->count(); 
        return view('mahasiswa.dashboardmhs',compact('countstp','countstk','countskm'));
    }

    //Tampilan Surat Mahasiswa
    public function pengajuansuratmhs(){
        $psurat = PengajuanSurat::where('nomor_surat',null)
        ->paginate(10);
        //return $psurat;
        return view('mahasiswa.pengajuansuratmhs',compact('psurat'));
    }

    //CRUD Surat Mahasiswa
    public function surattugaskmhs(){
        return view('mahasiswa.surattugaskmhs');
    }
    public function surattugaspmhs(){
        return view('mahasiswa.surattugaspmhs');
    }
    public function suratkegiatanmhs(){
        return view('mahasiswa.suratkegiatanmhs');
    }

    public function simpansurattugaskmhs(Request $request){
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
        //$niang = implode(",", $request->get('ni_ang'));
        //$nmang = implode(",", $request->get('nama_ang'));
       
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
        //dd($request->all());
        // User::create([
        //     'prodi' => $request -> prodi,
        //     'semester' => $request -> semester
        // ]);
        return redirect('mahasiswa/pengajuansuratmhs');
    }
    public function simpansurattugaspmhs(Request $request){
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

    public function editsurattgspmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('mahasiswa.editsurattgspmhs',compact('psurat'));
    }

    public function editsuratkeg($id) {
        $psurat = PengajuanSurat::findorfail($id);
        return view('mahasiswa.editsuratkeg',compact('psurat'));
    }

    public function editsurattgskmhs($id) {
        $psurat = PengajuanSurat::find($id);
        $exp = $psurat->ni_ang;
        $exp1 = explode(',',$exp);
        $esp = $psurat->nama_ang;
        $esp1 = explode(',',$esp); 
        return view('mahasiswa.editsurattgskmhs',compact('psurat','exp1','esp1'));
    }


    public function updatesuratgskmhs(Request $request,$id) {
        $niang = implode(",", $request->get('ni_ang'));
        $nmang = implode(",", $request->get('nama_ang'));
        $psurat = PengajuanSurat::find($id);
        $psurat->tanggal = $request->tanggal;
        $psurat->status = null;
        $psurat->nama_mitra = $request->nama_mitra;
        $psurat->tema = $request->tema;
        $psurat->keterangan = $request->keterangan;
        $psurat->lokasi = $request->lokasi;
        $psurat->ni_ang = $niang;
        $psurat->nama_ang = $nmang;
        $psurat->save();
        return redirect('/mahasiswa/pengajuansuratmhs')->with('edit','Data berhasil di Ubah');
    }

    public function updatesuratgspmhs(Request $request,$id) {
        $psurat = PengajuanSurat::find($id);
        $psurat->tanggal = $request->tanggal;
        $psurat->nama_mitra = $request->nama_mitra;
        $psurat->tema = $request->tema;
        $psurat->keterangan = $request->keterangan;
        $psurat->lokasi = $request->lokasi;
        $psurat->status = null;
        $psurat->save();
        return redirect('/mahasiswa/pengajuansuratmhs')->with('edit','Data berhasil di Ubah');
    }


    public function deletesuratmhs($id) {
        $psurat = PengajuanSurat::findorfail($id);
        $psurat->delete();
        return back();
    }

    public function arsipstpmhs(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->whereNotNull('validasi')
        ->whereNull('ni_ang')
        ->whereNotNull('status')
        ->paginate();
        //return $psurat;
        return view('mahasiswa.arsipstpmhs',compact('psurat'));
    }

    public function arsipstkmhs(){
        $psurat = PengajuanSurat::where('jenis_id','4')
        ->whereNotNull('validasi')
        ->whereNotNull('ni_ang')
        ->whereNotNull('status')
        ->paginate();
        //return $psurat;
        return view('mahasiswa.arsipstkmhs',compact('psurat'));
    }

    public function arsipskmmhs(){
        $psurat = PengajuanSurat::where('jenis_id','2')
        ->whereNotNull('validasi')
        ->whereNotNull('status')
        ->paginate();
        //return $psurat;

        return view('mahasiswa.arsipskmmhs',compact('psurat'));

    }



    public function downloadsurattgsk($id){
        $surat['surat'] = PengajuanSurat::where('id',$id)->first();
        $psurat = PengajuanSurat::find($id);
       
        $exp = explode(',',$psurat->ni_ang);
        $exp1 = explode(',',$psurat->nama_ang);
        //dd($exp1);
        $html= view('surattugaskel')->with($surat)->with('exp',$exp)->with('exp1',$exp1);
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
