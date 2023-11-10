<?php
require "koneksi.php";

$errors = array();
$nama =  $_POST['firstname'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$alamat =  $_POST['alamat'];
$file_name = $_FILES['ktp']['name'];
$file_size = $_FILES['ktp']['size'];
$file_tmp = $_FILES['ktp']['tmp_name'];
$file_type = $_FILES['ktp']['type'];
$expensions = array("jpeg", "jpg", "png");
if ($file_size > 2097152) {
    $errors[] = 'File size must be excately 2 MB';
}

if (empty($errors) == true) { // check apakah ada error pada foto
    move_uploaded_file($file_tmp, "upload/" . $file_name); // jika tidak langsung simpan foto
    // Insert file information into the database
    $sql = "INSERT INTO mitra (nama, email, phone,alamat,ktp) VALUES ('$nama', '$email', '$phone','$alamat','$file_name')";
    if ($conn->query($sql) === TRUE) {
        echo "File information saved in the database.";    
        echo '<script type="text/javascript">alert("data telah berhasil terkirim ke admin");history.go(-1);</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    print_r($errors);
}
$conn->close();
