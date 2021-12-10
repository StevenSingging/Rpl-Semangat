<!DOCTYPE html>
<div id="halaman">
<html lang ="en">
<head>
    <title>Surat Keterangan</title>
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
    <table align="center" >
        <tr>
            <td align="center" ><strong><u>SURAT KEGIATAN MAHASISWA&nbsp;</u></strong><br> No: {{$suratk->nomor_surat}} <br><br></td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan ="">Saya yang bertanda tangan dibawah ini :
            </td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nama&emsp;&nbsp;&thinsp;&thinsp;&thinsp;  : {{$suratk->pj->name}}</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIDN&emsp;&nbsp;&thinsp;&thinsp;&thinsp;&thinsp;: {{$suratk->pj->nik}}</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jabatan&nbsp;&emsp;  : {{$suratk->pj->posisi}}</td>
        </tr>
        <tr>
            <td colspan =""> <br>Dengan ini menerangkan nama dibawah ini :</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nama&emsp;&nbsp;&nbsp;&thinsp;&emsp;&nbsp;&emsp;&nbsp;  : {{$suratk->user->name}}</td>
        </tr>
        @if($suratk->user->level == 'mahasiswa')
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIM&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;: {{$suratk->user->niuser}}</td>
        </tr>
        @endif
        @if($suratk->user->level == 'dosen')
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIDN&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;: {{$suratk->user->niuser}}</td>
        </tr>
        @endif
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Program Studi&thinsp;&thinsp;&thinsp;&thinsp;  : {{$suratk->user->prodi}}</td>
        </tr>
        @if($suratk->user->level == 'mahasiswa')
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Semester&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;  :{{$suratk->user->semester}}</td>
        </tr>
        @endif
        @if($suratk->user->level == 'dosen')
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Masa Pengajaran&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;  :{{$suratk->user->semester}}</td>
        </tr>
        @endif
        <tr >
            <td><br>Merupakan mahasiswa aktif di Prodi Sistem Informasi Fakultas Teknologi Informasi <br>
            Universitas Kristen Duta Wacana.<br>
                Demikian suratk keterangan ini kami buat, untuk dapat digunakan sebagaimana mestinya.<br><br></td>
        </tr>
        <table  align="left">
        <tr>
            <td><u>Yogyakarta, {{date('d-m-Y', strtotime($suratk->updated_at))}}</u></td>
        </tr>
        <tr>
            <td><u>{{$suratk->pj->posisi}}</u></td>
        </tr>
        <tr>
            <td height="80"></td>
        </tr><br>
        <tr>
            <td><u>{{$suratk->pj->name}}</u><br>{{$suratk->pj->nik}}</td>
        </tr>
        <br>
    </table>
    
</div>
</body>
</html>