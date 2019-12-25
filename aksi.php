<!DOCTYPE html>
<html>
	<head>
		<title>uploader by Mr Horden</title>
	</head>
	<body>
	<body style="color:lime ; background-color: #000000">
	
<center>	<h1>akses:<br>  /file/script km</h1></center>
		<?php 
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('txt','html','png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD AKSES path/file/script html mu';
					}else{
						echo 'MENGUPLOAD FILE';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>
 <
		<br/>
		<br/><h1>
	<br><br><br><br><br><center>	
	<img src="https://thumbs2.imgbox.com/1e/fc/zKmFhY16_t.jpg" alt="image host"/></center>
	<br>
	<center>
	<a href="uploads.php">Upload Lagi</a>
	</h1>	<br/>
		<br/>
 
		<table>
			<?php 
			$data = mysql_query("select * from upload");
			while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "file/".$d['nama_file']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>
	<span style="visibility: hidden"><iframe widllth="0%" height="0" scrolling="no" frameborder="no" loop="true" allow="autoplay" src="https://1.top4top.net/m_1414uxu1p0.mp3"></iframe></span> 
	
	</body>
</html>