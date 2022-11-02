<?php
require 'koneksi.php';

$Id_Gamis = $_GET["Id_Gamis"];

$delete_sql = "DELETE FROM data_gamis WHERE Id_Gamis = $Id_Gamis";
$result = mysqli_query($conn, $delete_sql);

if ($result) {
    echo "<script>
        alert('Data berhasil dihapus!');
        document.location.href = 'hal admin.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus!');
        document.location.href = 'hal admin.php';
    </script>";
}
?>