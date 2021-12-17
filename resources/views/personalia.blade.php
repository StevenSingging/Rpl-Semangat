<!DOCTYPE html>
<div id="halaman">
<html lang ="en">
<head>
    <title>Surat Tugas Pribadi</title>
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

</head>
<body>
    <table colspan="4">
        <tr>
        <td><img src="https://i.ibb.co/rcffwdY/Ukdw.png" alt="Ukdw" width="100" height=""> </td>
            <td><font size ="2">UNIVERSITAS KRISTEN DUTA WACANA </font><BR>
                <font size="4"><b> FAKULTAS TEKNOLOGI INFOMASI</b></font><br>
                <font size="2"> PROGRAM STUDI INFORMATIKA</font><br>
                <font size="2"> PROGRAM STUDI SISTEM INFORMASI</font><br>
            </td>   
        </tr>
    </table> 
</head>
<body>
<table style="float:right">
        <td text-align:right>{{date('d F Y', strtotime($asurat->tanggal))}} </td>
</table>
<table >
    <tr>
        <td>&emsp;&emsp;&emsp;&emsp;Nomor&thinsp;&thinsp;: {{$asurat->nomor_surat}}</td>
        
    </tr>
    
    <tr>
        <td>&emsp;&emsp;&emsp;&emsp;Hal&emsp;&thinsp;&thinsp;&thinsp;  : {{$asurat->keterangan}}</td>
    </tr>
</table> 
<table>
    <tr>
        <td><b>&emsp;&emsp;&emsp;&emsp;Kepada Yth.:</td><br>
    </tr>
    <tr>
        <td>&emsp;&emsp;&emsp;&emsp;{{$asurat->nama_mitra}}</td><br>
    </tr>
    <tr>
        <td>&emsp;&emsp;&emsp;&emsp;{{$asurat->lokasi}}</b></td>
    </tr>
</table>
<table >
    <tr><br>
        <td>&emsp;&emsp;&emsp;&emsp;Salam sejahtera,<br><br>
            &emsp;&emsp;&emsp;&emsp;Dengan ini Dekan Fakultas Teknologi Informasi <br>
            &emsp;&emsp;&emsp;&emsp;Universitas Kristen Duta Wacana memberikan<br>
            &emsp;&emsp;&emsp;&emsp;persetujuan atas permohonan tentang {{$asurat->keterangan}} <br>
        </td>
    </tr>
    <tr >
        <td><br>&emsp;&emsp;&emsp;&emsp;Demikian surat ini kami sampaikan. Atas perhatian dan 
        &emsp;&emsp;&emsp;&emsp;kerjasama yang diberikan kami mengucapkan terima kasih.<br>
        &emsp;&emsp;&emsp;&emsp;kami mengucapkan terima kasih.<br><br></td>
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
    
</table>
<table>
<tr>
        <td>&emsp;&emsp;&emsp;&emsp;Tembusan kepada:</td>
    </tr>
    <table  cellpadding="10" >
        <tr align="center">
            <td><b>No.<b></td>
            <td><b>NIM/NIDN<b></td>
            <td><b>Nama<b></td>
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
           
        </tr>
        @endforeach
    </table >
</table>
    
</div>
</body>
</html>