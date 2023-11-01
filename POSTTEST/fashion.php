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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Recommendations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="script.js"> -->
</head>
<body class="light-theme"> 
    <header>
        <h3>FASHION ❤</h3>
        <p>Time :<?php  echo date ("l, d-M-Y || H:i:sa e")?></p>
        <div class="ikon">
            <a id="dark-mode" onclick="Class()" class="fas fa-moon"></a>
            <a href="user.php" class="fas fa-home"></a>
        </div>  
    </header>
    <section class="Fashion" id="Fashion">
        <div class="fasss">
            <div class="sion" id="kotak">
                <img src="fas5.jpg" alt=""><br>
                <h5>Korean Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang menarik perhatian</p> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas6.jpg" alt=""><br>
                <h5>Hangout Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang nyaman digunakan ketika keluar</p> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas7.jpg" alt=""><br>
                <h5>Rainbow Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang penuh dengan warna</p> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas8.jpg" alt=""><br>
                <h5>Mamba Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang terlihat elegan</p> 
            </div>
            <?php foreach ($conten as $con) : ?>
            <div class="sion" id="kotak">
                <img src="img/<?php echo $con['gambar']; ?>" alt="" /><br>
                <h5><?php echo $con['judul']; ?></h5>
                <p><?php echo $con['deskripsi']; ?></p>
            </div>
            <?php endforeach; ?>
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
            alert("Saat Ini Belum Ada Yang Baru ☺");
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
</html>