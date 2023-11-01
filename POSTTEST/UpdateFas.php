<?php
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM conten where id=$id");

$conten = [];

while ($row = mysqli_fetch_assoc($result)){
    $conten[] = $row;
}

$conten = $conten[0];

if (isset($_POST['UpdateFas'])) {
    $judul = htmlspecialchars( $_POST['judul']);
    $desk = htmlspecialchars($_POST['deskripsi']);

    //upload gambar
    $img = $_FILES['gambar']['name'];
    $explode = explode(',',$img);
    $ekstensi = strtolower(end($explode));
    $gambar_baru =  date("Y-m-d") . "$judul.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp,'img/'.$gambar_baru)) {
            $result = mysqli_query($conn, "UPDATE conten SET gambar = '$gambar_baru', judul = '$judul', deskripsi='$desk' WHERE id = '$id' ");
            if ($result) {
                echo "
                <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'admin.php'
                </script>";
            }else {
                echo "
                <script>
                    alert('Data Gagal DiTambahkan!');
                    document.location.href = 'UpdateFas.php'
                </script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
</head>

<body>
<section class ="signin" id="signin">
        <div class="form">
            <div class="box form-box"> 
                <header>
                    <h5>Update Data</h5>
                </header>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="field input">
                        <input type="hidden" name="id" value="<?=$conten['id'] ?>">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" accept="img/*">
                    </div>
                    <div class="field input">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="<?=$conten['judul'] ?>">
                    </div>
                    <div class="field input">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" value="<?=$conten['deskripsi'] ?>">
                    </div>
                    <div class="field input">
                        <input type ="submit" name="UpdateFas" value="Update" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>