<?php
require 'koneksi.php';
$select_sql = "SELECT *FROM data_gamis";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$data_gamis = [];
$uploadfile = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_gamis[] = $row;
    $uploadfile[]= $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <title>posttest5</title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">muslim wear shop</a></div>
            <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>
            </div>
        </div>
        
    </nav>

    <div class="wrapper">
        <section id="home">
            <img src="Logoatas.jpg">
            <div class="kolom">
                <a href="editdata.php">editdata</a>
                <a href="uploadfile.php">uploadfile</a>
                <p>
                    <button class= "Uploadfile"
                    onclick="UploadProduk">
                    uploadfile
                    <a href="uploadfile.php"></a>
                </button>
                </p>
                <p class="deskripsi">Tempat Penjualan Baju Muslim termurah dan Terlaris</p>
                <p>silahkan pesan disini!</p>
                <!-- <p><a href="" class="tbl-pastel">Check-out Sekarang</a></p> -->
                <p>
                    <button class="Check-out" 
                    onclick="ubahWarna()">
                    Check-out</button>
                    <button class="Melihat-Pesanan"
                    onclick="ubahWarna()">
                    Melihat-Pesanan</button>
                </p>
            </div>
        </section>
    </div>
    <div class="main">
        <div class="namabajumuslim">
            <img src="Abaya.jpg" alt="">
            <p>Abaya</p>
            <p>IDR. 250,000,-</p>
        </div>
        <div class="namabajumuslim">
            <img src="Gamis 2022.jpg">
            <p>Gamis Reanata</p>
            <p>IDR. 220.000,</p>
        </div>
        <div class="namabajumuslim">
            <img src="Clarissa.jpg">
            <p>Gamis Clarissa</p>
            <p>IDR. 200.000,</p>
        </div>
        <div class="namabajumuslim">
            <img src="Baju Kurung Moden Style.jpg">
            <p>Baju Kurung Moden</p>
            <p>IDR. 250.000,</p>
        </div>  
    </div>
    
    
    <div id="About">
        <div class="wrapper">
            <section id="About">
                <p ><img src="Darniah.jpg" style="float:left;"/></p>
                <div class="footer">
                    <div class="footer-section">
                            <h3>About</h3>
                            <p><b>About me</b></p>
                            <P>Nama          : Darniah</P>
                            <P>Nim           : 2009106116</P>
                            <P>Program Studi : Informatika</P>
                            <P>Angkatan      : 2020</P>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Address</h3>
                    <p>Jl. perjuangan 7, sempaja selatan , Samarinda utara, Samarinda, Kalimantan Timur</p>
                </div>
                <div class="footer-section">
                    <h3>Email</h3>
                    <p>muslim wear shop22@gmail.com</p>
                </div>
                <div class="footer-section">
                    <h3>Telpon</h3>
                    <p>+62 0822 3603 2865</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <b>Instagram:</b><p>@muslim wear shop</p>
                    <b>Facebook:</b><p>@muslim wear shop</p>
                </div>
            </div>    
        </div>
    </div>
    <div class="header">
        <div class="header-logo"></div>
        <div class="header-list">
          <ul>
            <li>Tentang</li>
            <li>Hubungi Kami</li>
          </ul>
        </div>
      </div>
    
    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>muslim wear shop</b> All Rights Reserved.
        </div>
    </div>

    <script src="script.js"></script>
    <script src="jquery.js"></script>
</body>
</html>
