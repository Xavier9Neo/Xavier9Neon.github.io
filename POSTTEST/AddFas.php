<?php
require "koneksi.php";

if (isset($_POST["AddFas"])) {
    $judul = $_POST["judul"];
    $desk = $_POST["deskripsi"];
    // upload gambar
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru ="$judul.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'img/'. $gambar_baru)){
        $result = mysqli_query($conn, "insert into conten 
        (id, gambar, judul, deskripsi) 
        values ('', '$gambar_baru', '$judul', '$desk')");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Ditambahkan dan file berhasil diupload');
                document.location.href = 'admin.php';
                </script>
                ";
        } else {
            echo error_log($result)."
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'AddFas.php';
            </script>
            ";
        }
    }else{
        echo "gagal mengupload gambar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>

<body>
<section class ="signin" id="signin">
        <div class="form">
            <div class="box form-box"> 
                <header>
                    <h5>Tambah Data</h5>                    
                </header>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="field input">
                        <label for="">Upload Gambar</label>
                        <input type="file" name="gambar" id="">
                    </div>
                    <div class="field input">
                        <label for="">Judul</label>
                        <input type="text" name="judul" id="">
                    </div>
                    <div class="field input">
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi" id="">
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="AddFas" value="Tambah">
                    </div>
                   </form>
            </div>
        </div>
    </section>
    <a href="admin.php">Kembali ke home</a>
</body>

</html>