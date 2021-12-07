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

    <table colspan="4">
        <tr>
            <td><img src="https://i.ibb.co/rcffwdY/Ukdw.png" alt="Ukdw" width="100" height=""></td>
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
            <td align="center" ><strong><u>SURAT TUGAS&nbsp;</u></strong><br>  No: {{$asurat->nomor_surat}} <br><br></td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan ="">Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta 
                Wacana <br> memberikan tugas kepada {{$asurat->user->level}} tersebut di bawah ini:<br><br>
            </td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nama&nbsp;  : {{$asurat->user->name}}</td>
        </tr>
        @if($asurat->user->level == 'mahasiswa')
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIM&nbsp;&thinsp;&thinsp;&thinsp;  : {{$asurat->user->niuser}}<br><br></td>
        </tr>
        @endif
        @if($asurat->user->level == 'dosen')
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIK&nbsp;&thinsp;&thinsp;&thinsp;  : {{$asurat->user->niuser}}<br><br></td>
        </tr>
        @endif
        <tr>
            <td colspan =""> <br>Untuk bertugas sebagai {{$asurat->sebagai}} bersama {{$asurat->nama_mitra}}<br>dengan ,
                yang diselengarakan pada : <br><br></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;Hari/Tanggal&thinsp;&thinsp;: </td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;Tema&emsp;&emsp;&emsp;&thinsp;  : </td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;Tempat&emsp;&emsp;&nbsp;&thinsp;  : </td>
        </tr>
        <tr >
            <td><br>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.<br><br></td>
        </tr>
        </table> <br>
        <table  align="left">
        <tr>
            <td><u>Yogyakarta,</u></td>
        </tr>
        <tr>
            <td><u></u></td>
        </tr>
        <tr>
            <td height="80"></td>
        </tr><br>
        <tr>
            <td><u></u><br></td>
        </tr>
        <br>
    </table>
    
</div>
</body>
</html>