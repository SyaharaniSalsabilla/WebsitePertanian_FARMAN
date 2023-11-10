<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

require "koneksi.php";

$query = "SELECT * FROM mitra";
$mitra = $conn->query($query);


$query = "SELECT * FROM pertanyaan";
$pertanyaan = $conn->query($query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin FARMAN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="B.css">
</head>

<body>
    <nav>
        <a href="index.php"><img src="2.png"></a>
        <div class="nav-links">
            <ul>
                <li><a style="color: black;" href="index.php">HOME</a></li>
                <li><a style="color: black;" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-admin">
        <div class="card card-primary" style="padding: 10px;">
            <div class="card-header" style="background-color: #678B20;">
                <h2 style="color: white;"><b>&nbsp;&nbsp;Mitra table</b></h2>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Alamat</th>
                                <th>KTP</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($mitra->num_rows > 0) {
                                while ($row = $mitra->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><img src="upload/<?= $row['ktp'] ?>" alt="image" width="50" height="50" class="img-fluid"></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $row['id'] ?>">
                                                edit
                                            </button>
                                            <a href="delmitra.php?id=<?= $row['id'] ?>" class="btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                    <div id="edit<?= $row['id'] ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit data</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="upmitra.php" class="cm" method="POST">
                                                        <input type="hidden" value="<?= $row['id'] ?>" name="id">
                                                        <label for="fname"><b>Nama*</b></label>
                                                        <input type="text" id="fname" name="firstname" value="<?= $row['nama'] ?>" placeholder="Masukkan Nama Anda">
                                                        <label for="phone"><b>No. HP*</b></label>
                                                        <input type="text" placeholder="Masukkan No. HP Anda" value="<?= $row['phone'] ?>" name="phone" required>
                                                        <label for="email"><b>Email*</b></label>
                                                        <input type="text" placeholder="Masukkan Email Anda" value="<?= $row['email'] ?>" name="email" required>
                                                        <label for="alamat"><b>Alamat*</b></label>
                                                        <textarea id="alamat" name="alamat" placeholder="Tuliskan Alamat Lengkap Anda" style="height:100px"><?= $row['alamat'] ?></textarea>
                                                        <input class="btn btn-block" type="submit" value="Submit">
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-admin">
        <div class="card card-primary" style="padding: 10px;">
            <div class="card-header" style="background-color: #678B20;">
                <h2 style="color: white;"><b>&nbsp;&nbsp;Pertanyaan table</b></h2>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pertanyaan</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($pertanyaan->num_rows > 0) {
                    while ($row = $pertanyaan->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['pertanyaan'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editp<?= $row['id'] ?>">
                                    edit
                                </button>
                                <a href="delpertanyaan.php?id=<?= $row['id'] ?>" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                        <div id="editp<?= $row['id'] ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="uppertanyaan.php" class="cm" method="POST">
                                            <input type="hidden" value="<?= $row['id'] ?>" name="id">
                                            <label for="fname"><b>Nama*</b></label>
                                            <input type="text" id="fname" name="firstname" value="<?= $row['nama'] ?>" placeholder="Masukkan Nama Anda">
                                            <label for="email"><b>Email*</b></label>
                                            <input type="text" placeholder="Masukkan Email Anda" value="<?= $row['email'] ?>" name="email" required>
                                            <label for="alamat"><b>Pertanyaan*</b></label>
                                            <textarea id="alamat" name="pertanyaan" placeholder="Tuliskan Alamat Lengkap Anda" style="height:100px"><?= $row['pertanyaan'] ?></textarea>
                                            <input class="btn btn-block" type="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>