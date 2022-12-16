<a href="/masakerjakaryawan/mskkcreate"> Tambah Data</a>
<table border="1">
<tr>
        <th>NIK</th>
        <th>Nama Karyawan</th>
        <th>No Kontrak Kerja</th>
        <th>Tanggal Mulai Kerja</th>
        <th>Tanggal Berakhir Kerja</th>
        <th>Status Kontrak</th>
        <th>Tanggal Berhenti Kerja/Resign</th>
        <th>Status Keaktifan</th>
</tr>
@foreach($msaKK as $mskk)   
<tr>        
        <td>{{$mskk->NIndk}}</td>
        <td>{{$mskk->NmKary}}</td>
        <td>{{$mskk->NoKKerja}}</td>
        <td>{{$mskk->TglMulaiKerja}}</td>
        <td>{{$mskk->TglAkhirKerja}}</td>
        <td>{{$mskk->StatusKontrak}}</td>
        <td>{{$mskk->TglResign}}</td>
        <td>{{$mskk->StatusKeaktifan}}</td>
    </tr>
    @endforeach
</table>