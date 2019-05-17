<?php
include("koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$notlpn = $_POST['notlpn'];
$query = mysql_query("insert into mhs values  ('$nim','$nama','$alamat','$agama','$notlpn')");
echo "Data Telah disimpan<br>
<a href=\"indexmhs.php\">Kembali</a>";
?>