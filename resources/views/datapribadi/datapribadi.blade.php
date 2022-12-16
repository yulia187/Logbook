<a href="/DataPribadi/pribadicreate"> Tambah Data</a>
<table border="1">
<tr>
        <th>NIK</th>
        <th>Nama Karyawan</th>
        <th>Nama Panggilan</th>
        <th>Alamat Sesuai KTP</th>
        <th>Alamat Tempat Tinggal</th>
        <th>No Telp Rumah</th>
        <th>No Hp 1</th>
        <th>No Hp 2</th>
        <th>Email</th>
        <th>Agama</th>
        <th>Status Pernikahan</th>
        <th>No Kartu Keluarga</th>
        <th>Nama Suami/Istri</th>
        <th>Jumlah Anak</th>
</tr>
@foreach($datapribadi as $dp)    
<tr>        
        <td>{{$dp->Nik}}</td>
        <td>{{$dp->Nama_Karyawan}}</td>
        <td>{{$dp->Nama_Panggilan}}</td>
        <td>{{$dp->Alamat_KTP}}</td>
        <td>{{$dp->Alamat_Tinggal}}</td>
        <td>{{$dp->NoTelp_Rumah}}</td>
        <td>{{$dp->No_HP1}}</td>
        <td>{{$dp->NO_HP2}}</td>
        <td>{{$dp->Email}}</td>
        <td>{{$dp->Agama}}</td>
        <td>{{$dp->Status_Karyawan}}</td>
        <td>{{$dp->NoKartuKeluarga}}</td>
        <td>{{$dp->Nama_Pasangan}}</td>
        <td>{{$dp->Jumlah_Anak}}</td>
    </tr>
    @endforeach
</table>