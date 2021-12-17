<!DOCTYPE html>
<div id="halaman">
<html lang ="en">
<head>
    <title>SK Dekan</title>
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
    /* width : 450px; 
    height:450px;  */
    position : center; 
    border : 0px solid;
    padding-top:30px;
    padding-bottom:106px;
    padding-left:30px;
    padding-right:30px;
}
    </style>

    <table align="center" colspan="4">
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
    <table align="center">
        <tr>
            <td align="center" colspan="2"><strong><u><strong>SURAT KEPUTUSAN DEKAN</strong><br>
            <strong>FAKULTAS TEKNOLOGI INFORMASI</strong><br>
            <strong>UNIVERSITAS KRISTEN DUTA WACANA</strong></u><br> No: {{$asurat->nomor_surat}} <br><br></td>
        </tr>
        <br>
        <tr>
            <td align="center"colspan="2"><strong>Tentang :</strong></td><br><br>
        </tr>
        <tr>
                <td align="center" colspan="2"><strong>{{$asurat->tema}}</strong></td>
            </tr>
    </table>
    <table>
        <tr>
            <td colspan="2">Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana</td> 
        </tr>
         <tr>
            <td>Menimbang&emsp;&emsp;&emsp;&thinsp;&thinsp;&thinsp;:{!!$asurat->menimbang!!}</td>
        </tr>
        <tr>
            <td>Mengingat&emsp;&emsp;&emsp;&emsp;&thinsp;:{!!$asurat->menimbang!!}</td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td align="center"><strong>Memutuskan :</strong></td><br><br> 
    </table>
    <table>
    </tr>
         <tr>
            <td>Menetapkan&emsp;&emsp;&emsp;&thinsp;&thinsp;&thinsp;:</td>
        </tr>
        <tr>
            <td>{!!$asurat->menetapkan!!}&emsp;&emsp;&emsp;&emsp;&thinsp;<br><br></td>
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