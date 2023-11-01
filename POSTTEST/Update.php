<?php
require "koneksi.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from fashion where id = '$id'");

$fashion = [];

while ($row = mysqli_fetch_assoc($result)) {
    $fashion[] = $row;
}

$fashion = $fashion[0];

if (isset($_POST["Update"])) {
    $nama = $_POST["nama"];
    $user = $_POST["username"];
    $pass = $_POST["password"];   

    $result = mysqli_query($conn, "update fashion set nama = '$nama', username = '$user', password = '$pass' where id = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'cout.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahsion Recommendations</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="light-theme">
<!-- sebagai bagian atas dari body -->
    <section class ="signin" id="signin">
        <div class="form">
            <div class="box form-box"> 
                <header>
                    <h5>Update</h5>
                    <nav class="navigasi">
                        <div class="ikon">
                            <a href="cout.php" class="fas fa-home"></a>
                            <a id="dark-mode" onclick="Class()" class="fas fa-moon"></a>
                        </div>
                    </nav>
                </header>
                <form action="" method="post">
                    <div class="field input">
                        <label>Name</label>
                        <input type="text" name="nama" value="<?=$fashion["nama"]?>">
                    </div>
                    <div class="field input">
                        <label>Username</label>
                        <input type="text" name="username" value="<?=$fashion["username"]?>"> <br>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" value="<?=$fashion["password"]?>"> <br>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="Update" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </section>
<i id="dark-mode" class="fas fa-sun">Toggle Dark Mode</i>
    
<script>
    function toggleDarkMode() {
        if(document.getElementById("dark-mode").className == "fas fa-sun"){
            document.body.className = "light-theme";
            document.getElementById("dark-mode").className = "fas fa-moon"
        }else{
            document.body.className = "dark-theme";
            document.getElementById("dark-mode").className = "fas fa-sun";
        } 
    }
    // Menambahkan event listener
    document.getElementById("dark-mode").addEventListener("click", toggleDarkMode);


    function showAlert() {
        alert("Anda Berhasil Registrasi😎");
    }


    // Ambil elemen HTML yang akan diubah warnanya
    var kotak = document.getElementById('kotak');

// Tambahkan event listener untuk mengubah warna ketika diklik
kotak.addEventListener('click', function() {
if (sion.classList.contains('sion')) {
    sion.classList.remove('sion');
    sion.classList.add('dark-theme');
} else {
    sion.classList.remove('dark-theme');
    sion.classList.add('sion');
}
});
</script>
</body>