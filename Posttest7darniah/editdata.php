<?php
require 'koneksi.php';
$select_sql = "SELECT *FROM data_gamis";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$data_gamis = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_gamis[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>HOME</title>
</head>

<body>

    <section class="content">
        <h1 class="title">Daftar Gamis</h1>
        <a href="create.php"><button class="create"><i class="fas fa-plus"></i> Tambah Data</button></a>
		<a href="sorting.php"><button class="create"><i class="fas fa-plus"></i> Urutkan Data</button></a>
        <form action="cari.php" method="post">
            Cari Barang : <input type="text" name="search" autocomplete="off">
            <button class="cari" type="submit">Cari</button>
        </form>
        <table>
            <tr>
                <th>ID_GAMIS</th>
                <th>NAMA_GAMIS</th>
                <th>MODEL_GAMIS</th>
                <th>STOK</th>
                <th>GAMBAR</th>
                <th>ACTION</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($data_gamis as $gamis) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $gamis["Nama_Gamis"] ?></td>
                    <td><?= $gamis["Model_Gamis"] ?></td>
                    <td><?= $gamis["Stok"] ?></td>
                    <td><img src="gambar/<?=$gamis['gambar']?>" alt="" width="500px"></td>
                    <td><a href="update.php?Id_Gamis=<?= $gamis["Id_Gamis"]; ?>"><button class="update"><i class="fas fa-pen"></i></button></a>
                        <a href="delete.php?Id_Gamis=<?= $gamis["Id_Gamis"]; ?>"><button class="delete"><i class="fas fa-trash"></i></button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
        <a href="hal admin.php">Kembali</a>
    </section>
</body>

</html>