<?php
session_start();
require 'koneksi.php';

// if(!isset($_SESSION['Login'])){
//     header('Location: index.php');
//     exit;
// }

if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['logged'] = true;
            header('Location: user.php');
            exit;
        }
    }else{
        $error = true;
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
                    <h5>Login</h5>
                    <nav class="navigasi">
                        <div class="ikon">
                            <a id="dark-mode" onclick="Class()" class="fas fa-moon"></a>
                            <a href=".php" class="fas fa-home"></a>
                        </div>
                    </nav>
                </header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="Login" value="Login">
                    </div>
                    <div class="links">
                        Dont have account? <a href="SignUp.php">Sign-Up Now!</a>
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