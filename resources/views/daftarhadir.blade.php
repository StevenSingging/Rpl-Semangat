<!DOCTYPE html>
<div id="halaman">
<html lang ="en">
<head>
    <title>Surat Daftar Hadir</title>
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
    <br><br>
    <table>
        <tr>
            <td>Nama Kegiatan&thinsp;&thinsp;: {{$asurat->tema}}</td>
        </tr>
        <tr>
            <td>Hari/Tanggal&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;: {{$asurat->tanggal}}</td>
        </tr>
        <tr>
            <td>Waktu&emsp;&emsp;&emsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;: {{$asurat->waktuml}}</td>
        </tr>
        <tr>
            <td>Tempat&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&thinsp;&thinsp;  : {{$asurat->lokasi}}</td>
        </tr>
        <tr>
            <td>Pembicara&emsp;&emsp;&thinsp;  : {{$asurat->nama_mitra}}</td>
        </tr>
    </table>
    <br>
    <table border= 1px cellpadding="10" >
        <tr align="center">
            <td><b>No.<b></td>
            <td><b>NIM/NIDN<b></td>
            <td><b>Nama Lengkap<b></td>
            <td><b>Tanda Tangan<b></td>
        </tr>
        <?php
        $c=array_combine($exp,$exp1);
        print_r($c);
        ?>
        @foreach($c as $key => $value)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$key}}</td>
            <td>{{$value}}</td> 
            <td></td>  
        </tr>
        @endforeach
    </table ><br>
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