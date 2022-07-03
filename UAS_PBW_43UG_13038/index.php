<?php
$nama='';
$tanggal='';
$email='';
$waktu='';
$durasi='';
$orang='';
$pesan='';
if (isset($_POST['submit'])) {
    $nama=$_POST['nama'];
    $tanggal=$_POST['date'];
    $email=$_POST['email'];
    $waktu=$_POST['waktu'];
    $durasi=$_POST['durasi'];
    $orang=$_POST['orang'];

    $pesan="Terima kasih, $nama [$email]. Reservasi Anda pada tanggal : $tanggal, waktu pemesanan : $waktu, durasi :$durasi dengan kapasitas $orang berhasil dilakukan";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.RED BAKERY</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--navigasi bar-->
    <nav>
        <img src="assets/img/logo.svg" alt="logo">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#reservation">Reservation</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!--Home-->
    <a id="home"></a>
    <div class="home">
        <div class="text-box">
            <h1>Rasa Manis untuk <br> Meningkatkan Mood</h1> 
            <p>Kami selalu memperhatikan bahan-bahan yang kami gunakan. Dengan menggunakan bahan yang berkualitas, kami ingin memberikan cita rasa manis yang dapat mengubah suasana hati para pelanggankami.</p>
        </div>
        <div class="gallery-box">
            <img src="assets/img/boxed-macarons-unsplash.png">
        </div>
    </div>   

    <!--About-->
    <a id="about"></a>
    <div class="about">
        <p>
            Sekilas Tentang Kami
        </p>
        <h2>
            Kami adalah anak perusahaan dari PT Gandum the Wheat yang bergerak dalam industri bahan baku pembuaatan
            roti. Saat ini, kami masih ingin terus mengembangkan usaha kami. Untuk itu, kami mendirikan usaha toko roti
            sekaligus tempat bersantai sembari menikmati seluruh produk kami.
        </h2>
    </div>

    <!--Gallery-->
    <a id="gallery"></a>
    <div class="gallery">
        <p>Rasakan pengalaman yang berbeda ketika mengunjungi toko kami secara offline</p>
        <div class="full-img" id="fullImgBox">
            <img src="assets/img/window-bakery-unsplash.png" id="fullImg">
            <span onclick="closeFullImg()">X</span>
        </div>
        <div class="img-gallery">
            <img src="assets/img/window-bakery-unsplash.png" onclick="openFullImg(this.src)">
            <img src="assets/img/red-cake-unsplash.png" onclick="openFullImg(this.src)">
            <img src="assets/img/brown-cake-unsplash.png" onclick="openFullImg(this.src)">
            <img src="assets/img/cake-table-unsplash.png" onclick="openFullImg(this.src)">
            <img src="assets/img/cashier-unsplash.png" onclick="openFullImg(this.src)">
            <img src="assets/img/donut-unsplash.png" onclick="openFullImg(this.src)">
        </div>
        <h3>Toko kami didesain untuk memberikan sebuah kesan yang tak terlupakan, kepada seluruh pelanggan. Pelanggan
            dapat bersantai sekaligus menikmati seluruh menu roti yang kami miliki.</h3>
    </div>
    <!--Reservation-->
    <a id="reservation"></a>
    <div class="reservation">
        <div class="col-1">
            <h1>Rayakan Hari Spesialmu Bersama Kami</h1>
            <div class="btn">
                <a href="#btn">Pesan Sekarang</a>
            </div>
        </div>

        <div class="col-2">
            <img src="assets/img/luar-cafe-unsplash.png">
        </div>
    </div>

    <!--Form Reservation-->
    <class id="btn">
    <div class="container">
        <div class="container-waktu">
            <h3 class="heading-hari">SENIN-JUM'AT</h3>
            <p>09.00 - 11.00 (pagi)</p>
            <p>14.00 - 16.00 (sore)</p>
            <p>18.00 - 20.00 (malam)</p>

            <h3 class="heading-hari">SABTU & MINGGU</h3>
            <p>09.00 - 11.00 (pagi)</p>
            <p>15.00 - 17.00 (sore)</p>
            <p>19.00 - 21.00 (malam)</p>

            <hr>
            <h4 class="heading-phone">Telp: (123) 45-67-890</h4>
            <hr>
        </div>

        <div class="container-form">
            <form method="POST">
                <h2 class="heading heading-yellow">Reservasi Online</h2>
                <div class="form-field">
                    <p>Nama Anda</p>
                    <input type="text" name="nama" placeholder="Nama Anda">
                </div>
                <div class="form-field">
                    <p>Email Anda</p>
                    <input type="email" name="email" placeholder="Email Anda">
                </div>
                <div class="form-field">
                    <p>Tanggal</p>
                    <input name="date" type="date">
                </div>
                <div class="form-field">
                    <p>Waktu</p>
                    <select name="waktu" id="#">
                        <option value="0">pilih</option>
                        <option value="pagi">pagi</option>
                        <option value="sore">sore</option>
                        <option value="malam">malam</option>
                    </select>
                </div>
                <div class="form-field">
                    <p>Durasi</p>
                    <select name="durasi" id="#">
                        <option value="0">pilih</option>
                        <option value="1 jam">1 jam</option>
                        <option value="2 jam">2 jam</option>
                    </select>
                </div>
                <div class="form-field">
                    <p>Berapa orang?</p>
                    <select name="orang" id="#">
                        <option value="0">pilih</option>
                        <option value="10 orang">10 orang</option>
                        <option value="15 orang">15 orang</option>
                        <option value="20 orang">20 orang</option>
                        <option value="25 orang">25 orang</option>
                        <option value="30 orang">30 orang</option>
                    </select>
                </div>
                <button class="btn" name="submit">Pesan</button>
            </form>
        </div>
    </div>

    <div class ="popup">
    <?= $pesan ?>
    </div>

    <!--Contact-->
    <a id="contact"></a>
    <div class="contact">
        <table>
            <tr>
                <th><img src="assets/img/logo.svg" alt="logo red bakery"></th>
            </tr>
            <tr>
                <th>
                    <h4>Red Bakery adalah toko roti yang memiliki banyak jenis roti. Selain itu, kami memiliki beberapa
                        dessert untuk dicoba.</h4>
                </th>
            </tr>
            <tr>
                <th>
                    <h5>Jl. Floresiana No.4-5, Indo Raya</h5>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="https://www.instagram.com/dinita.ks/" target="_blank"><img src="assets/img/instagram.svg"
                            alt="instagram"></a>
                    <a href="https://t.me/dinitaks" target="_blank"><img src="assets/img/telegram.svg"
                            alt="telegram"></a>
                    <a href="mailto:111202013038@mhs.dinus.ac.id" target="_blank"><img src="assets/img/email.svg"
                            alt="email"></a>
                </th>
            </tr>
        </table>
    </div>
    <!--Copyright-->
    <div class="copyright">
        <p>&copy; 2021 - Dinita Kusumasari</p>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>