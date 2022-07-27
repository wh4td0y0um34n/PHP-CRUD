<?php 
    include "koneksi.php";
    $id = $_GET['idanggota'];
    $ambilData= mysqli_query($koneksi, "SELECT * FROM form WHERE idanggota='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Anggota
            </div>
            <div class="card-body">
                <form action="" method="POST"class="form_item">
                    <div class="form-group">
                        <label for="nama">Nama Anggota</label>
                        <input type="text" name="nama" value="<?php echo $data['nama']?>"class="form-control col-md-9" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM Anggota</label>
                        <input type="text" name="nim" value="<?php echo $data['nim']?>" class="form-control col-md-9" placeholder="Masukan NIM">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" value="<?php echo $data['kelas']?>" class="form-control col-md-9" placeholder="Masukan Kelas">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="hobi">Hobi</label>
                        <input type="text" name="hobi" value="<?php echo $data['hobi']?>" class="form-control col-md-9" placeholder="Masukan Hobi">
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    if(isset($_POST['simpan']))
    {
        $nama    = $_POST['nama'];
        $nim     = $_POST['nim'];
        $kelas   = $_POST['kelas'];
        $alamat  = $_POST['alamat'];
        $hobi    = $_POST['hobi'];

        mysqli_query($koneksi, "UPDATE form
            SET nama='$nama', nim='$nim', kelas='$kelas', alamat='$alamat', hobi='$hobi'
            WHERE idanggota='$id'") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....<h5></div>";
        echo "<meta http-equiv = 'refresh' content='1;url=http://localhost/webkel3/data_anggota.php'>";
    }
?>