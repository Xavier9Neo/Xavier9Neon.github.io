<?php
session_start();

if($_SESSION['logged'] == false){
    header('Location: index.php');
    exit();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Recommendations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/instagram?f=brands&s=solid">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="script.js"> -->
</head>
<body class="light-theme">
<!-- sebagai bagian atas dari body --> 
    <header> 
        <!-- NAVIGASI  -->
        <img class="logo" src="logothea.jpg" alt="">
        <nav class="navigasi">
            <a href="#Home" class="nav"><b>HOME</b></a>
            <a href="#AboutMe" class="nav"><b>ABOUT ME</b></a>
            <a href="fashion.php" class="nav"><b>FASHION</b></a>
            <a href="Logout.php" class="nav"><b>LOGOUT</b></a>
            <!-- <a href="SignUp.php" class="nav"><b>SIGN-UP</b></a> -->
        </nav>
        <div class="ikon">
            <a class="fas fa-search"></a>
            <a class="fas fa-heart" href=""></a>
            <!-- <a href=""><img src="moon.png" alt=""></a> -->
            <a id="dark-mode" onclick="Class()" class="fas fa-moon"></a>
        </div>
        <!-- <div class="ikon">
            <img src="moon.png" id="icon">
        </div> -->
        <!--CONTENT-->
    </header>

    <section>
        <div class="hidden-box"></div>
    </section>
    <section class="Home" id="Home">
        <img src="fashionbg.jpg" alt="#" >
        <div class="content"> 
            <h4 id="heading">Rekomendasi Fashion hari ini</h4>
            <span id="span">Tampil Elegan dan Menawan</span>
            <p id="text">“Cek fashion terbaru hari ini di kategori Fashion sekarang juga! Ada banyak pilihan baju trendi dan kekinian yang siap kamu gunakan untuk berpergian, santai, dan berbelanja.”</p>
            <button class="ptr" onclick="showAlert()">LOOK NOW</button>
        </div>
    </section>

    <section class="AboutMe" id="AboutMe">
        <div class="row">
            <div class="biodata">
                <img src="aboutmethea.jpg" alt=""><br><br>
                <p>Perkenalkan nama saya Thea Priscilla Esikelta Tarigan, Saya Lahir di Jakarta Timur pada tanggal 09 Maret 2004.
                    Saya berkuliah di Universitas Mulawarman Fakultas Teknik Prodi Informatika, Saya masuk pada tahun 2022, Saya kelas B22
                    Saya pusing sebenarnya mengerjakan ini tapi untuk kelangsungan kehidupan dalam perkuliahan saya mengerjakannya. Kiranya web ini bisa
                    lebih baik lagi kedepannya 😎🤩
                </p>
            </div>
        </div>
    </section>

    <section class="Fashion" id="Fashion">
        <div class="fasss">
            <div class="sion" id="kotak">
                <img src="fas1.jpg" alt=""><br>
                <h5>Korean Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang menarik perhatian</p>
                <a ></a>
            </div>
            <div class="sion" id="kotak">
                <img src="fas2.jpg" alt=""><br>
                <h5>Casual Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang simpel digunakan</p>
                <a></a>
            </div>
            <div class="sion" id="kotak">
                <img src="fas3.jpg" alt=""><br>
                <h5>Cute Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang imut dan lucu</p>
                <a></a>
            </div>
            <div class="sion" id="kotak">
                <img src="fas4.jpg" alt=""><br>
                <h5>Girl Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang menarik kaum pria dan kaum wanita</p>
                <a></a>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="boxout">
            <div class="box">
                <h3>MY Information</h3>
                <a href="#" class="fa-brands fa-instagram"> Instagram : @thexacil</a>
                <a href="#" class="fas fa-phone-volume">    WhatsApp : +62-8180-7597-756</a>
                <a href="#" class="fas fa-envelope">    Email : @theatarigan0903@gmail.com</a>
            </div>
            <div class="box">
                <h3>ABOUT US</h3>
                <a href="#" class="fas fa-circle-info"> Tentang</a> <hr>
                <a href="admin.php" class="fas fa-earth">   Rekomendasi Terkini</a> <hr>
                <a href="#" class="fas fa-users">   Kontak kami</a>
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
        alert("Saat Ini Belum Ada Yang Baru 😊");
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
