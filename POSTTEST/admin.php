<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from conten");

$conten = [];

while ($row = mysqli_fetch_assoc($result)) {
    $conten[] = $row;
}
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>

<body>

    <section class="dash-main">
        <h1>Halo Admin ! 👋🏻</h1><br>
        <p>Time :<?php  echo date ("l, d-M-Y || H:i:sa e")?></p>
        <hr><br>
    </section>
    <div class="leading-btn">
        <a href="AddFas.php"><button class="AddFas" class="btn">Tambah</button></a>
        </div><br>
        <h2>Daftar Fashion</h2>
        <div class="Fashion">     
            <?php
            $conn = new mysqli("localhost", "root", "", "posttest_pemweb");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM conten";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="fass">';
                    echo '<div class="sion">';
                    echo '<img src="img/'. $row['gambar'] . '">';
                    echo '<h2>' . $row['judul'] . '</h2>'; 
                    echo '<p>' . $row['deskripsi'] . '</p>';
                    echo '<a href="UpdateFas.php?id=' . $row['id'] . '"><button class="edit"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>';
                    echo '<a href="DeleteFas.php?id=' . $row['id'] . '" onclick="return confirm(\'Hapus konten? ' . $row['judul'] . '?\')"><button class="delete"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Tidak ada daftar conten";
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>

<br><a href="fashion.php" class="kembali">Kembali</a>
</html>

