<!DOCTYPE html>
<html>

<head>
    <title>Farman Asisten Petani</title>
    <link rel="stylesheet" href="B.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php
require "koneksi.php";
session_start();
if (isset($_SESSION['logged_in'])) {
    header("Location: admin.php");
    exit;
}
if(isset($_POST['login'])){
    $password =  $_POST['password']; // ambil data nama
    $email =  $_POST['email'];

    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    if (isset($result->num_rows) > 0) {
        // Login successful
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header('Location: admin.php');
        exit;
    } else {
        // Login failed
        echo '<script type="text/javascript">alert("login gagal");</script>';
    }

    $conn->close();
}
?>

<body>
    <section class="contact" id="contact">
        <br>
        <div class="title">
            <h1>LOGIN HANYA UNTUK ADMIN</h1>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="container2">
                    <form action="login.php" method="post">
                        <label for="email"><b>Email*</b></label>
                        <input type="text" placeholder="Masukkan Email Anda" name="email" required>
                        <label for="fname"><b>Password*</b></label>
                        <input type="password" id="fname" name="password" placeholder="Masukkan Password Anda">
                        <input type="submit" name="login" value="LOGIN">
                    </form>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </section>
</body>

</html>