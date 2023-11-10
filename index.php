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

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="2.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#tentangfarman">TENTANG FARMAN</a></li>
                    <li><a href="#visimisi">VISI MISI</a></li>
                    <li><a href="#mitra">KEMITRAAN</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box" id="text-box">
            <h1>FARMAN</h1>
            <h2>Asisten Petani</h2>
            <p>Farman Indonesia hadir sebagai perusahaan 
                agrobisnis lokal di Indonesia.</br>
                Berbasis teknologi, kami menjembatani 
                kebutuhan saprotan (sarana produksi pertanian)</br>
                di seluruh Indonesia yang dapat dipesan kapan 
                pun dan di mana pun.</p>
            <a href="" class="hero-btn">Info Selengkapnya</a>
        </div>
    </section>

    <!------ tentang farman ------>

    <section class="tentangfarman" id="tentangfarman">
        <div class="tentangfarman-content">
            <h1>Apa Itu Farman?</h1>
            <p>Farman Indonesia hadir sebagai perusahaan agrobisnis lokal di Indonesia.
                Berbasis teknologi, kami menjembatani kebutuhan saprotan (sarana produksi pertanian) di
                seluruh Indonesia yang dapat dipesan kapan pun dan di mana pun.</p>
            <p>Melalui jejaring pendistribusian yang terintegrasi dengan baik, Farman berkomitmen untuk
                menyediakan kebutuhan saprotan bagi para mitra dengan harga yang terjangkau.</p>
        </div>
    </section>

    <!------ visi misi ------>

    <section class="visimisi" id="visimisi">
        <div class="title">
            <h1>Visi Misi Farman</h1>
        </div>
        <div class="row">
            <div class="visimisi-farman">
                <h3>VISI</h3>
                <p>Farman terus bergerak dan memberikan kontribusi terbaik 
                    dalam membantu mitra melalui bisnis model teknologi 
                    yang berkesinambungan, inklusif, serta menguntungkan.</p>
            </div>
            <div class="visimisi-farman">
                <h3>MISI</h3>
                <p>Farman hadir menjadi penjembatan distribusi bagi para 
                    petani, mitra dan pabrikan saprotan. Tidak hanya 
                    memudahkan secara pendistribusian, dengan memesan melalui
                    website Farman, para mitra juga akan mendapatkan 
                    harga yang jauh lebih kompetitif sehingga dapat
                    memberikan pendapatan yang berlipat.</p>
            </div>
        </div>
    </section>

    <!------ kemitraan ------>

    <section class="mitra" id="mitra">
        <div class="title">
            <h1>Bergabung Jadi Mitra Farman, 
                Tingkatkan Keuntungan Berlipat!</h1>
            <p>Dengan bergabung menjadi Mitra Farman, pemilik toko 
                pertanian dapat memesan kebutuhan saprotan,
                kapan pun dan di mana pun dengan harga terbaik.</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="container">
                    <form action="addmitra.php" class="cm" method="POST" enctype="multipart/form-data">
                        <label for="fname"><b>Nama*</b></label>
                        <input type="text" id="fname" name="firstname" placeholder="Masukkan Nama Anda">
                        <label for="phone"><b>No. HP*</b></label>
                        <input type="text" placeholder="Masukkan No. HP Anda" name="phone" required>
                        <label for="email"><b>Email*</b></label>
                        <input type="text" placeholder="Masukkan Email Anda" name="email" required>
                        <label for="alamat"><b>Alamat*</b></label>
                        <textarea id="alamat" name="alamat" placeholder="Tuliskan Alamat Lengkap Anda" style="height:100px"></textarea>
                        <label for="email"><b>KTP*</b></label>
                        <input type="file" placeholder="Masukkan Email Anda" name="ktp" required>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!------ pengalaman ------>

    <section class="pengalaman" id="pengalaman">
        <div class="pengalaman-content">
            <h1>Pengalaman Mereka Bermitra dengan Farman</h1>
            <div class="row-pengalaman">
                <div class="pengalaman-mitra">
                    <h3>Guntur Tri</h3>
                    <h5>Kios Guntur Jaya, Jawa Timur</h5>
                    <p>"Saya bisa mengecek harga dengan cepat dan 
                        bisa di order tanpa perlu keluar rumah. 
                        Harganya juga terbaik!"</p>
                </div>
                <div class="pengalaman-mitra">
                    <h3>Bambang</h3>
                    <h5>Kios Berkah Tani, Jawa Barat</h5>
                    <p>"Farman ini sangat membantu saya, saya 
                        bisa mengecek barang dengan cepat,
                        belanja tanpa perlu ribet keluar rumah, 
                        gampang! Harganya juga terbaik."</p>
                </div>
                <div class="pengalaman-mitra">
                    <h3>Ahmad Subagja</h3>
                    <h5>Kios Suntari, Jawa Barat</h5>
                    <p>Harga paling murah! Tinggal tekan saja, 
                        barang langsung diantar. Tidak perlu antri 
                        lagi untuk beli barang.</p>
                </div>
            </div>
        </div>
    </section>

    <!------ contact ------>

    <section class="contact" id="contact">
        <div class="title">
            <h1>Punya Pertanyaan? Silakan Hubungi Kami</h1>
            <p>Kami akan segera menghubungi Anda setelah 
                Anda mengisi informasi berikut.</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="container2">
                    <form action="addpertanyaan.php" method="post">
                        <label for="fname"><b>Nama*</b></label>
                        <input type="text" id="fname" name="firstname" placeholder="Masukkan Nama Anda">
                        <label for="email"><b>Email*</b></label>
                        <input type="text" placeholder="Masukkan Email Anda" name="email" required>
                        <label for="pertanyaan"><b>Pertayaan*</b></label>
                        <textarea id="pertanyaan" name="pertanyaan" placeholder="Tuliskan Pertanyaan Anda" style="height:200px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="lokasi">
            <div class="row">
                <div class="col" style="margin: 50px;">
                    <h2>Lokasi :</h2>
                    <p>PT. FARMAN DIGITAL INDONESIA Ruko Taman Juang
                        Blok B 09 Unit BK,
                        Jl. Jend. A. Yani
                        Jakarta Timur, 11470
                        Email : <a href="">info@farman.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!------ footer ------>

    <div class="footer-basic" id="footer-basic">
        <footer>
            <div class="social">
                <a href=""><i class="icon ion-social-facebook"></i></a>
                <a href=""><i class="icon ion-social-instagram"></i></a>
            </div>
            <ul class="list-inline">
                <li><a href="#">HOME</a></li>
                <li><a href="#tentangfarman">TENTANG FARMAN</a></li>
                <li><a href="#visimisi">VISI MISI</a></li>
                <li><a href="#mitra">KEMITRAAN</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
            <p class="copyright">Syaharani Salsabilla Prasetyo_21090004</p>
        </footer>
    </div>
</body>

</html>