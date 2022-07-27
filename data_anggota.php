<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data_Anggota</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Anggota
            </div>
            <div class="card-body">
                <a href="form.php" class="btn btn-primary">Tambah Data</a>
               <table class="table table-bordered">
                   <tr>
                       <th>ID Anggota</th>
                       <th>Nama Anggota</th>
                       <th>NIM</th>
                       <th>Kelas</th>
                       <th>Alamat</th>
                       <th>Hobi</th>
                       <th>Aksi</th>
                   </tr>
                   <?php
                        include "koneksi.php"; 
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM form");
                        while($data=mysqli_fetch_array($tampil))
                        {
                   ?>
                   <tr>
                       <td> <?php echo $no++; ?></td>
                       <td> <?php echo $data['nama']; ?></td>
                       <td> <?php echo $data['nim']; ?></td>
                       <td> <?php echo $data['kelas']; ?></td>
                       <td> <?php echo $data['alamat']; ?></td>
                       <td> <?php echo $data['hobi']; ?></td>
                       <td> 
                           <a href="edit_form.php?idanggota=<?php echo $data['idanggota']; ?>" class="btn btn-sm btn-warning">Edit</a>
                           <a href="delete.php?idanggota=<?php echo $data['idanggota']; ?>" class="btn btn-sm btn-danger">Delete</a>
                       </td>
                   </tr>
                    <?php } ?>
               </table>
            </div>
        </div>
    </div>
</body>
</html>

