<table  border="1" style="padding:14px;color:black;text-align:center;border:black;border-collapse:collapse;font-size:15pt;">
    <tr>
            <th>id</th>
            <th>judul</th>
            <th>musisi</th>
            <th>tanggal_rilis</th>
            <th colspan="2" >aksi</th>
</tr>

<?php

include "koneksii.php";
$no=1;
$ambildata = mysqli_query ($koneksi,"select * from daftarlagu ");
while($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$tampil[id]</td>
    <td>$tampil[judul]</td>
    <td>$tampil[musisi]</td>
    <td>$tampil[tanggal_rilis]</td>
    </tr>";
    $no++;
}
?>
</table>

<?php
if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from tugas where nisn='$_GET[kode]'");

    echo"<script>alert('hapus data berhasil');</script>";
    echo"<meta http-equiv=refresh content=0;URL='tables.php'>";
}
?>
