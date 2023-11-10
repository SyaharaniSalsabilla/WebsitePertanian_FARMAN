<?php

require "koneksi.php";

$id = $_POST['id'];
$nama =  $_POST['firstname'];
$email =  $_POST['email'];
$pertanyaan =  $_POST['pertanyaan'];
$sql = "UPDATE pertanyaan SET nama='$nama',  email='$email', pertanyaan='$pertanyaan' WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
