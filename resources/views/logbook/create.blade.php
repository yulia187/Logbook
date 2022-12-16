<h1> TAMBAH DATA </h1>

<form action="/logbook/datakaryawan" method="post">
        @csrf
<select name="Nama Perusahaan">
        <option value="">Pilih Nama Perusahaan</option>
        <option value="PLKK">PT PLKK</option>
        <option value="BBK">PT BBK</option>
        <option value="MDC">PT MDC</option>
        <option value="KIB">PT KIB</option>
        <option value="BPRS">PT BPRS</option>
        <option value="MC">PT Mirabell Klinik</option>
        <option value="JMS">PT JMS</option>
        <option value="PRVT">Private</option>
</select> <br>  
<select name="Jenis Karyawan">
        <option value="">Jenis Karyawan</option>
        <option value="TTP">Tetap</option>
        <option value="KTR">Kontrak</option>
        <option value="HRN">Harian</option>
        <option value="EKS">Eksternal</option>
</select> <br>    
    <input type="text" name="Nik" placeholder="Nik"><br>
    <input type="text" name="Nama" placeholder="Nama Karyawan"><br>
    <input type="text" name="Tanggal Mulai Bekerja" placeholder="Tanggal Mulai Bekerja"><br>
    <input type="text" name="No KTP" placeholder="No KTP"><br>
    <input type="text" name="No NPWP" placeholder="No NPWP"><br>    
    <input type="text" name="Tempat Lahir" placeholder="Tempat Lahir"><br>
    <input type="date" name="Tanggal Lahir" placeholder="Tanggal Lahir"><br>
    <select name="Jenis Kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
</select> <br>
    <select name="Lokasi Penempatan">
        <option value="">Lokasi Penempatan</option>
        <option value="KCS">KC Balikpapan</option>
        <option value="KCS">KC Samboja</option>
        <option value="KIB">KIB</option>
        <option value="PJT">Project</option>
        <option value="WSGP">WS Gunung Puteri</option>
        <option value="WSK">WS Kariangau</option>     
</select> <br> 
<select name="Departemen">
        <option value="">Departemen</option>
        <option value="ACC">Accounting</option>
        <option value="ADC">Administrasi & Accounting</option>
        <option value="AB">Alat Berat</option>
        <option value="ASSET">Asset</option>
        <option value="BM">Bata Merah</option>     
        <option value="BID">Bidding</option>
        <option value="COR">Coordinator</option>
        <option value="DSM">Dismantle(Hydrotest)</option>
        <option value="EL">Enviro & Lab</option>
        <option value="HK">House Keeping</option>
        <option value="HR">HR</option>     
        <option value="HSE">HSE</option>
        <option value="HMS">Humas</option>
        <option value="ICT">Incinerator</option>
        <option value="IT">IT</option>
        <option value="LAB">LAB</option>
        <option value="LGL">Legal</option>     
        <option value="LNL">Loading/Unloading</option>
        <option value="LOG">Logistic</option>
        <option value="MCH">Machining</option>
        <option value="MTC">Maintenance</option>
        <option value="MKT">Marketing</option>
        <option value="OS">Outsourching</option>     
        <option value="PMB">Pramubakti</option>
        <option value="PROC">Procurement</option>
        <option value="PCT">Project</option>
        <option value="SOR">Proses SOR/WWTP</option>
        <option value="QAC">QA & QC</option>
        <option value="SEC">Security</option>     
        <option value="SG">Segregasi</option>
        <option value="SPL">Sipil</option>
        <option value="TECH">Technical</option>
        <option value="TRNS">Transportasi</option>
</select> <br> 
<select name="Jabatan">
        <option value="">Jabatan</option>
        <option value="ACC">Accounting</option>
        <option value="AE">Admin Enviro</option>
        <option value="AH">Admin HRD</option>
        <option value="AP">Admin Project</option>
        <option value="APC">Admin Purchasing</option>     
        <option value="ATC">Admin Technical</option>
        <option value="ATN">Admin Tender</option>
        <option value="AVD">Admin Vice Director</option>
        <option value="ASSM">Assembling</option>
        <option value="ASST">Asst. Supervisor</option>
        <option value="CS">Cleaning Service</option>     
        <option value="DIR">Director</option>
        <option value="DVR">Driver</option>
        <option value="DNH">Driver & Helper</option>
        <option value="ELC">Electrician</option>
        <option value="GRD">Gardener</option>
        <option value="GA">General Administrasi</option>     
        <option value="GM">General Manager</option>
        <option value="HD">Head</option>
        <option value="HHR">Head HR</option>
        <option value="HHS">Head HSE</option>
        <option value="HIT">Head IT</option>
        <option value="HMT">Head Maintenance</option>     
        <option value="HMKT">Head Marketing</option>
        <option value="HPJT">Head Project</option>
        <option value="HPCH">Head Purchasing</option>
        <option value="HSP">Head Sipil</option>
        <option value="HTCH">Head Technical</option>
        <option value="HLP">Helper</option>     
        <option value="HLPM">Helper Maintenance</option>
        <option value="HKPG">Housekeeping</option>
        <option value="HSEC">HSE Coordinator</option>
        <option value="HMST">Humas Staff</option>
        <option value="KPJK">Konsultan Pajak</option>
        <option value="LE">Laboratory Engineer</option>
        <option value="LSF">Legal Staff</option>
        <option value="LOGS">Logistik</option>
        <option value="LOGST">Logistik Staff</option>
        <option value="MTN">Maintenance</option>     
        <option value="MDR">Mandor/Pengawas Incunerator</option>
        <option value="MEX">Marketing Executive</option>
        <option value="MCH">Mechanic</option>
        <option value="OB">Office Boy</option>
        <option value="OG">Office Girl</option>
        <option value="OPT">Operator</option>     
        <option value="OPB">Operator Bulldozer</option>
        <option value="OPEH">Operator Excavator Hitachi</option>
        <option value="OEHY">Operator Excavator Hyundai</option>
        <option value="OEK">Operator Excavator Komatsu</option>
        <option value="OPIN">Operator Incinerator</option>
        <option value="OPLNL">Operator Loading/Unloading</option>     
        <option value="OPSOR">Operator Process SOR</option>
        <option value="OPW">Operator Process WWTP</option>
        <option value="OPSG">Operator Segregasi</option>
        <option value="PGRM">Programmer</option>
        <option value="QCL">Quality Control</option>
        <option value="RCPT">Receptionist</option>     
        <option value="SFTY">Safetyman</option>
        <option value="SGM">Secretary General Manager</option>
        <option value="SEC">Security</option>
        <option value="SPL">Sipil</option>
        <option value="STACC">Staff Accounting</option>
        <option value="STLOG">Staff Logistic</option>     
        <option value="STPCH">Staff Purchasing</option>
        <option value="SPVD">Supervisor Driver</option>
        <option value="SDHT">Supervisor Dismantle (Hydrotest)</option>
        <option value="SELB">Supervisor Enviro & Lab</option>
        <option value="SPVLG">Supervisor Legal</option>
        <option value="SPVLNL">Supervisor Loading/unloading</option>
        <option value="SPVLOG">Supervisor Logistik</option>
        <option value="SPWWTP">Supervisor Process WWTP</option>
        <option value="SPPJCT">Supervisor Project</option>
        <option value="SPQAC">Supervisor QA & QC</option>     
        <option value="SPSG">Supervisor Segregasi</option>
        <option value="SPSPL">Supervisor Sipil</option>
        <option value="SUPSLGL">Supporting Staff Legal</option>
        <option value="SUPLOG">Supporting Staff Logistik</option>
        <option value="SUPSM">Supporting Staff Marketing</option>
        <option value="VDIR">Vice Director</option>     
        <option value="WKR">Wakar</option>
        <option value="WLDR">Welder</option>
        <option value="WMGR">Workshop Manager</option>
    </select> <br>      
    <select name="Status Karyawan">
        <option value="">Status Karyawan</option>
        <option value="AKT">Aktif</option>
        <option value="TA">Tidak Aktif</option>
        </select> <br> 
        <input type="file" name="upload" placeholder="upload file"><br>
        <input type="submit" name="submit" value="save">
</form>