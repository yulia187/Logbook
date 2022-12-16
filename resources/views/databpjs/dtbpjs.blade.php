<a href="/databpjs/bpjscreate"> Tambah Data</a>
<table border="1">
<tr>
        <th>NIK</th>
        <th>Nama Karyawan</th>
        <th>No BPJS Kesehatan</th>
        <th>Tanggal Daftar BPJS Kesehatan</th>
        <th>No BPJS Ketenagakerjaan</th>
        <th>Tanggal BPJS Ketenagakerjaan</th>
        <th>Jenis Program</th>
        <th>Bulan Aktivasi</th>
</tr>
@foreach($dtabpjs as $dtbp)   
<tr>        
        <td>{{$dtbp->NInduk}}</td>
        <td>{{$dtbp->NmPegawai}}</td>
        <td>{{$dtbp->NoBPJSKesehatan}}</td>
        <td>{{$dtbp->TglDaftar}}</td>
        <td>{{$dtbp->NoBPJSTK}}</td>
        <td>{{$dtbp->TglBPJSTK}}</td>
        <td>{{$dtbp->JnsPrgrm}}</td>
        <td>{{$dtbp->BlnAktivasi}}</td>
    </tr>
    @endforeach
</table>