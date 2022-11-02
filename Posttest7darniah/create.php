<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $Nama_Gamis = $_POST["Nama_Gamis"];
    $Model_Gamis = $_POST["Model_Gamis"];
    $Stok = $_POST["Stok"];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$Model_Gamis.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO data_gamis (Nama_Gamis,Model_Gamis,Stok,gambar) VALUES ('$Nama_Gamis','$Model_Gamis','$Stok','$gambar_baru')";
        $result = $conn->query($query);

        if($result){
            header("Location:index.php");
        }else{
            echo "gagal kirim";
        }
    }
    // if ($result) {
    //     echo "<script>
    //         alert('Data berhasil ditambahkan!');
    //         document.location.href = 'hal admin.php';
    //     </script>";
    // } else {
    //     echo "<script>
    //         alert('Data gagal ditambahkan!');
    //         document.location.href = 'create.php';
    //     </script>";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>CREATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-header">
                <h2>FORM untuk Data gamis</h2>
            </div>
            <div class="form-content">
            <div class="form-area">
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Nama_gamis :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="Nama_Gamis" autocomplete="off">
                    </div>
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Model :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="Model_Gamis" autocomplete="off">
                    </div>
                </div>
                   <div class="form-label">
                        <label for="">STOK :</label>
                    </div>				
                     <div class="form-input">
                        <input type="text" name="Stok" autocomplete="off">
                    </div>
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Gambar :</label>
                    </div>
                    <div class="form-input">
                        <input type="file" name="gambar" autocomplete="off">
                    </div>
                </div>
                <div class="form-button">
                    <button type="submit" name="submit">Submit</button>
                    <a href="hal admin.php">Kembali ke Home</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>