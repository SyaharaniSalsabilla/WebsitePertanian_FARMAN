<?php
require "koneksi.php";

$nama =  $_POST['firstname']; // ambil data nama
$email =  $_POST['email']; // ambil data email
$pertanyaan =  $_POST['pertanyaan']; // petanyaan
$sql = "INSERT INTO pertanyaan (nama, email, pertanyaan) VALUES ('$nama', '$email', '$pertanyaan')"; // insert to db
if ($conn->query($sql) === TRUE) { // jika berhasil
    echo " information saved in the database."; // alert berharsil
    echo '<script type="text/javascript">alert("data telah berhasil terkirim ke admin");history.go(-1);</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
