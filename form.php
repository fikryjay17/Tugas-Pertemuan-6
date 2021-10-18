
<html>
<head>
    
    <title>Formulir Perikanan</title>
</head>

<body style= "background-color: orange; font-family:verdana;">
<img src="upi_hki_png.PNG" width="30px" height="30px" alt="Sistem Informasi Kelautan">Sistem Informasi Kelautan<br>
   <h1 style= "background-color: aquamarine;">Form Nelayan </h1> 
   <form name="" action="proses_get.php" method="get">
   <center>
       <table style="width:100%">
           <tr>
               <td style="background-color: aqua;">Kode Nelayan</td>
               <td>:</td>
               <td ><input type="text" name="kode_nelayan" style="background-color: cornsilk;" placeholder="Kode Nelayan..."/></td>
            </tr>
            <td style="background-color: aqua;">NIK</td>
               <td>:</td>
               <td ><input type="text" name="NIK" style="background-color: cornsilk;" placeholder="NIK..."/></td>
            <tr>

            </tr>

            <tr>
                <td style="background-color: aqua;">Nama Nelayan</td>
                <td>:</td>
                <td><input type="text" name="Nama_nelayan" style= "background-color: cornsilk;" placeholder="Nama Nelayan..."/></td>
            </tr>

            <tr>
                <td style="background-color: aqua;">Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" placeholder="Alamat..." cols="22" rows="10" style= "background-color: cornsilk;" ></textarea></td>
            </tr>

            <tr>
                <td style="background-color: aqua;">Jenis kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" style= "background-color: cornsilk;" value= "laki-laki"/>Laki-laki <br>
                    <input type="radio" name="jk" style= "background-color: cornsilk;" value= "perempuan"/>Perempuan <br>
                </td>
            </tr>

            <tr>
            <td style="background-color: aqua;">Status Kawin</td>
                <td>:</td>
                <td><input type="radio" name="sk" style= "background-color: cornsilk;" value= "kawin"/>Kawin <br>
                    <input type="radio" name="sk" style= "background-color: cornsilk;" value= "belum"/>Belum <br>
                </td>
            </tr>

            <tr>
                <td style="background-color: aqua;">Agama</td>
                <td>:</td>
                <td>
                    <select name="Agama">
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Prostestan</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td style="background-color: aqua;">Jenis Alat Tangkap</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="Jenis_Alat_Tangkap" value="Cantrang"/>Cantrang <br>
                    <input type="checkbox" name="Jenis_Alat_Tangkap" value="Gillnet"/>Gillnet <br>
                    <input type="checkbox" name="Jenis_Alat_Tangkap" value="Alat Pancing"/>Alat Pancing <br>
                    <input type="checkbox" name="Jenis_Alat_Tangkap" value="Trawl"/>Trawl <br>
                    <input type="checkbox" name="Jenis_Alat_Tangkap" value="Pukat cincin"/>Pukat Cincin <br>
                </td>
            </tr>
                
            <tr>
            <td style="background-color: aqua;">Jenis kapal</td>
            <td>:</td> 
            <td align="left">
                    <input type="checkbox" name="Jenis Kapal[]" value="<10 GT"/>10 GT <br>
                    <input type="checkbox" name="Jenis Kapal[]" value="<200 GT"/>200 GT <br>
                    <input type="checkbox" name="Jenis Kapal[]" value="<30 GT"/>30 GT <br>
                    <input type="checkbox" name="Jenis Kapal[]" value="<50 GT"/>50 GT <br>
            </td>
            </tr>

            <tr>
                <td colspan="3"><input class="btn btn-primary" name="tombol" type="submit" value="Simpan"></td>
            </tr>
       </table>
       </center>
   </form>
   <p>Muhammad Fikry Jayyid_2010081: &copy;</p>
</body>
</html>