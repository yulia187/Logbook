<h1> TAMBAH DATA </h1>

<form action="/masakerjakaryawan/mskksave" method="post">
        @csrf
    <input type="text" name="NIndk" placeholder="Nik"><br>
    <input type="text" name="NmKary" placeholder="Nama Karyawan"><br>
    <input type="text" name="NoKKerja" placeholder="No Kontrak Kerja"><br>
    <input type="date" name="TglMulaiKerja" placeholder="Tanggal Mulai Kerja"><br>
    <input type="date" name="TglAkhirKerja" placeholder="Tanggal Akhir Kerja"><br>    
    <input type="text" name="StatusKontrak" placeholder="Status Kontrak"><br>
    <input type="date" name="TglResign" placeholder="Tanggal Berakhir Kerja/Resign"><br>     
    <input type="text" name="StatusKeaktifan" placeholder="Status Keaktifan"><br>
    <input type="submit" name="submit" value="save">  
</form>
