<a href="/datapendidikan/pendcreate"> Tambah Data</a>
<table border="1">
<tr>
        <th>NIK</th>
        <th>Nama Karyawan</th>
        <th>Tingkat Pendidikan</th>
        <th>Nama Sekolah/Universitas</th>
        <th>Status</th>
        <th>Tahun Lulus</th>
        <th>IPK</th>
        <th>Memiliki Training</th>
        <th>Memiliki Sertifikat</th>
        <th>Memiliki Keahlian</th>
        <th>Memiliki Pengalaman</th>
</tr>
@foreach($dtapend as $dtpn)   
<tr>        
        <td>{{$dtpn->NoInduk}}</td>
        <td>{{$dtpn->NamaPegawai}}</td>
        <td>{{$dtpn->TingkatPend}}</td>
        <td>{{$dtpn->Jurusan}}</td>
        <td>{{$dtpn->NamaSekolah}}</td>
        <td>{{$dtpn->Status}}</td>
        <td>{{$dtpn->TahunLulus}}</td>
        <td>{{$dtpn->IPK}}</td>
        <td>{{$dtpn->Training}}</td>
        <td>{{$dtpn->Sertifikasi}}</td>
        <td>{{$dtpn->Keahlian}}</td>
        <td>{{$dtpn->Pengalaman}}</td>
    </tr>
    @endforeach
</table>