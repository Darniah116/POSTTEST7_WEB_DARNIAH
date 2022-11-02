<!DOCTYPE html>
<html>
	<head>
		<title>UPLOAD</title>
	</head>
	<body>
	<h1>Upload Produk Muslim Wear Shop <br/>
		<?php 
		 require 'uploadfile.php';

         if(isset($_POST['submit'])){
             $nama = $_POST['nama'];
             
             $gambar = $_FILES['gambar']['name'];
             $x = explode('.', $gambar);
             $ekstensi = strtolower(end($x));
     
             $gambar_baru = "$nama.$ekstensi";
             $tmp = $_FILES['gambar']['tmp_name'];
     
             if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
                 $query = "INSERT INTO uploadfile (nama) VALUES ('$gambar_baru')";
                 $result = $db->query($query);
     
                 if($result){
                     header("Location: hal admin.php");
                 }else{
                     echo "gagal kirim";
                 }
             }
             
         }
		?>
 
		<br/>
		<br/>
		<a href="hal admin.php">Upload Lagi</a>
		<br/>
		<br/>
 
		<table>
			<?php 
			$uploadfile = ("select * from uploadfile");
			while($d = ($uploadfile)){
			?>
			<tr>
				<td>
					<img src="<?php echo "file/".$d['nama_file']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>
	</body>
</html>