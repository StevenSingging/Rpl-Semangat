<!DOCTYPE html>
<head>
    <title>Surat Kegiatan Mahasiswa</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: 595px; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }
    </style>

</head>
<body>
<div id="halaman">
    <table colspan="4">
        <tr>
            <td><img src="{{asset('/Admin/dist/img/Ukdw.png') }}" width="100" height=""> </td>
            <td><font size ="2">UNIVERSITAS KRISTEN DUTA WACANA </font><BR>
                <font size="4"><b> FAKULTAS TEKNOLOGI INFOMASI</b></font><br>
                <font size="2"> PROGRAM STUDI INFORMATIKA</font><br>
                <font size="2"> PROGRAM STUDI SISTEM INFORMASI</font><br>
            </td>   
        </tr>
    </table>
    <table align="center" >
        <tr>
            <td align="center" ><strong><u>SURAT KEGIATAN MAHASISWA&nbsp;</u></strong><br> No: #autoIncre <br><br></td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan ="">Saya yang bertanda tangan dibawah ini :
            </td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nama&emsp;&nbsp;&thinsp;&thinsp;&thinsp;  :namattd #</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIDN&emsp;&nbsp;&thinsp;&thinsp;&thinsp;&thinsp;: #nidnttd</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jabatan&nbsp;&emsp;  :#jabatanttd</td>
        </tr>
        <tr>
            <td colspan =""> <br>Dengan ini menerangkan nama dibawah ini :</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nama&emsp;&nbsp;&nbsp;&thinsp;&emsp;&nbsp;&emsp;&nbsp;  :namaPengaju #</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NIM&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;: #nimPengaju/td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Program Studi&thinsp;&thinsp;&thinsp;&thinsp;  :namaPengaju #</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Semester&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;  :#semsterPengaju</td>
        </tr>
        <tr >
            <td><br>Merupakan mahasiswa aktif di Prodi Sistem Informasi Fakultas Teknologi Informasi <br>
            Universitas Kristen Duta Wacana.<br>
                Demikian surat keterangan ini kami buat, untuk dapat digunakan sebagaimana mestinya.<br><br></td>
        </tr>
        </table> <br>
    <div text-align: left; float: right;">#tempat ttd,#tanggalTTD</div><br>
    <div text-align: left; float: right;">#levelTTD,</div><br><br><br><br><br>
    <div text-align: left; float: right;">
    <tr>
        <td><u>#namaTTD</u></td><br>
        <td>#nikTTD</td>
    </tr></div><br>
    
</div>
</body>
</html>