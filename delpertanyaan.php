<?php 

require "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM pertanyaan WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
