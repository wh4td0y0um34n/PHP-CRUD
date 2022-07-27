<?php
    include "koneksi.php";
    $id = $_GET['idanggota'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM form WHERE idanggota='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/webkel3/data_anggota.php'>";
?>