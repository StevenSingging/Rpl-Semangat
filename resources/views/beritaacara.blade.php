<!DOCTYPE html>
<div id="halaman">
<html lang ="en">
<head>
    <title>Surat Berita Acara</title>
    <meta charset="utf-8">
    <style>
#wrapper {
        margin: 0px auto;
        width: 550px;
        height :300px;
        padding: 0px;
}
#halaman {
    margin: 0px auto;
    width : 450px; 
    height:450px; 
    position : center; 
    border : 0px solid;
    padding-top:30px;
    padding-bottom:80px;
    padding-left:30px;
    padding-right:30px;
}
    </style>

    <table colspan="4">
        <tr>
            <td><img src="https://i.ibb.co/rcffwdY/Ukdw.png" width="100" height=""> </td>
            <td><font size ="2">UNIVERSITAS KRISTEN DUTA WACANA </font><BR>
                <font size="4"><b> FAKULTAS TEKNOLOGI INFOMASI</b></font><br>
                <font size="2"> PROGRAM STUDI INFORMATIKA</font><br>
                <font size="2"> PROGRAM STUDI SISTEM INFORMASI</font><br>
            </td>   
        </tr>
    </table>
</head>
<body>
    <table align="center" >
        <tr>
            <td align="center" ><strong>BERITA ACARA&nbsp;</strong></td>
        </tr>
        <br>
        <tr>
            <td align="center"><strong><br> {{$asurat->keterangan}}</strong><br> No: {{$asurat->nomor_surat}} <br><br></td><br><br>
        </tr>
    </table>
    <table >
    <tr>
        <td colspan ="2">&emsp;&emsp;&emsp;&emsp;Pada tanggal :{{date('d F Y', strtotime($asurat->tanggal))}} ,bertempat di {{$asurat->lokasi}} telah dilangsungkan 
        <br>&emsp;&emsp;&emsp;&emsp;{{$asurat->keterangan}}.
        <br>&emsp;&emsp;&emsp;&emsp;Acara ini diikuti oleh {{$asurat->peserta}}. <br>
        <br>&emsp;&emsp;&emsp;&emsp;Adapun TOR acara, daftar kehadiran peserta, foto kegiatan seperti terlampir
        &emsp;&emsp;&emsp;&emsp;pada berita acara hari ini. <br>
        <br>&emsp;&emsp;&emsp;&emsp;Demikian Berita Acara ini dibuat dengan sebenarnya, untuk dapat dipergunakan 
        &emsp;&emsp;&emsp;&emsp;sebagaimanamestinya.</td>
    </tr>
    </table>
    <table  align="left">
        <tr>
            <td><u>Yogyakarta,{{date('d F Y', strtotime($asurat->updated_at))}}</u></td>
        </tr>
        <tr>
            <td><u>{{$asurat->pj->posisi}}</u></td>
        </tr>
    @if($asurat->pejabat_id == 1)
    <tr>
        <td height="80"><img src="https://i.ibb.co/t8NFrTd/Dekan.png" alt="dekan" width="100" height=""></td>
    </tr><br>
    @endif
    @if($asurat->pejabat_id == 2)
    <tr>
        <td height="80"><img src="https://i.ibb.co/p3KPGXN/WD-1-Informatika.png" alt="wd-1-informatika" width="100" height=""></td>
    </tr><br>
    @endif
    @if($asurat->pejabat_id == 3)
    <tr>
        <td height="80"><img src="https://i.ibb.co/kXxZ27H/WD-1-Sistem-Informasi.png" alt="wd-1-si" width="100" height=""></td>
    </tr><br>
    @endif
    @if($asurat->pejabat_id == 4)
    <tr>
        <td height="80"><img src="https://i.ibb.co/nCSWYsY/WD-2-Keuangan.png" alt="wd-2-keuangan" width="100" height=""></td>
    </tr><br>
    @endif
    @if($asurat->pejabat_id == 5)
    <tr>
        <td height="80"><img src="https://i.ibb.co/ChjFjY6/WD-3-Kemahasiswaan.png" alt="wd-3-kemahasiswaan" width="100" height=""></td>
    </tr><br>
    @endif
        <tr>
            <td><u>{{$asurat->pj->name}}</u><br>{{$asurat->pj->nik}}</td>
        </tr>
        <br>
    </table>
</div>
</body>
</html>