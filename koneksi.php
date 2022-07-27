<?php
    $koneksi = mysqli_connect("localhost", "root", "", "form");

    if(mysqli_connect_errno($koneksi))
    {
        echo "Koneksi Gagal ". mysqli_connect_error();
    }
?>
