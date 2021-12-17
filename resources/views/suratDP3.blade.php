<!DOCTYPE html>
<head>
    <title>Surat DP3</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
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
            <td align="center" ><strong><u>SURAT DP3&nbsp;</u></strong><br> No: #autoIncre <br><br></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;#tanggal</td>
        </tr>
    </table>
    <br>
    <table border= 1px cellpadding="10" >
        <tr align="center">
            <td><b>No.<b></td>
            <td colspan="4"><b>Keterangan <b></td>
           
        </tr>
        <tr>
            <td rowspan='4' align='center'>1.</td>
            <td colspan="4"><b>Pihak dinilai :<b></td>
            
        </tr>
        <tr>
            <td>NIDN</td>
            <td  colspan="4">#nidn</td> 
        </tr>
        <tr>
            <td>Nama</td>
            <td colspan="4">#nama</td> 
        </tr>
        <tr>
            <td>Jabatan</td>
            <td colspan="4">#jabatanpengaju</td> 
        </tr>
        <tr>
            <td rowspan='4' align='center'>2.</td>
            <td colspan="4"><b>Pihak Penilai :<b></td>
            
        </tr>
        <tr>
            <td>NIDN</td>
            <td colspan="4">#nidn</td> 
        </tr>
        <tr>
            <td>Nama</td>
            <td colspan="4">#nama</td> 
        </tr>
        <tr>
            <td>Jabatan</td>
            <td colspan="4">#jabatanpengaju</td> 
        </tr>
        <tr>
            <td rowspan='10' align='center'>3.</td>
            <td colspan="4"><b> Penilaian :<b></td>
        </tr>
        <tr>
            <td rowspan='3'>Unsur Penialaian</td>
            <tr>
            <td align='center' colspan='2'>Nilai</td>
            <td rowspan='2'align='center'>Keterangan</td>
            <tr>
            <td align='center'>Angka</td>
            <td align='center'>Sebutan</td> 
         </tr>
         <tr>
            <td>Kejujuran</td>
            <td>#kejujuran</td> 
            <td>#kejujuran</td> 
            <td>#kejujuran</td> 
        </tr>
        <tr>
            <td>Tanggung Jawab</td>
            <td>#tanggungJawab</td> 
            <td>#tanggungJawab</td> 
            <td>#tanggungJawab</td> 
        </tr>
        <tr>
            <td>Kerja Sama</td>
            <td>#kerjasama</td> 
            <td>#kerjasama</td> 
            <td>#kerjasama</td> 
        </tr>
        <tr>
            <td>Kepemimpinan</td>
            <td>#kepemimpinan</td> 
            <td>#kepemimpinan</td> 
            <td>#kepemimpinan</td> 
        </tr>
        </tr>
    </table ><br>
   
    <div text-align: left; float: right;">Penanggung jawab kegiatan :</div><br>
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