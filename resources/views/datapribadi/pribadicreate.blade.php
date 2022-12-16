<h1> TAMBAH DATA </h1>

<form action="/datapribadi/pribadisave" method="post">
        @csrf
    <input type="text" name="Nik" placeholder="Nik"><br>
    <input type="text" name="Nama_Karyawan" placeholder="Nama Karyawan"><br>
    <input type="text" name="Nama_Panggilan" placeholder="Nama Karyawan"><br>
    <input type="text" name="Alamat_KTP" placeholder="Alamat Sesuai KTP"><br>
    <input type="text" name="Alamat_Tinggal" placeholder="Alamat Tempat Tinggal"><br>
    <input type="text" name="NoTelp_Rumah" placeholder="No Telp Rumah"><br>    
    <input type="text" name="No_HP1" placeholder="No HP 1"><br>
    <input type="text" name="No_HP2" placeholder="No HP 2"><br>     
    <input type="text" name="Email" placeholder="Email"><br>     
    <select name="Agama">
        <option value="">Agama</option>
        <option value="ISLM">Islam</option>
        <option value="KTLK">Katolik</option>
        <option value="KRST">Kristen</option>
        <option value="BUD">Buddha</option>
        <option value="HID">Hindu</option>
        <option value="ATH">Atheis</option>
</select> <br>
<select name="Status_Karyawan">
        <option value="">Status Pernikahan</option>
        <option value="BM">Belum Menikah</option>
        <option value="MNKH">Menikah</option>
        <option value="CH">Cerai Hidup</option>
        <option value="CM">Cerai Mati</option>
</select> <br>     
    <input type="text" name="NoKartuKeluarga" placeholder="No Kartu Keluarga"><br>
    <input type="text" name="Nama_Pasangan" placeholder="Nama Pasangan"><br>     
    <input type="text" name="Jumlah_Anak" placeholder="Jumlah Anak"><br>     
    <input type="submit" name="submit" value="save">
</form>
