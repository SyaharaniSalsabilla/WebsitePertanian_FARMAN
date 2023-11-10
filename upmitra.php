<?php

require "koneksi.php";

$id = $_POST['id'];
$nama =  $_POST['firstname'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$alamat =  $_POST['alamat'];
$sql = "UPDATE mitra SET nama='$nama', phone='$phone', email='$email', alamat='$alamat' WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
