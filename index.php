<?php 
	include 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="water.min.css">
	<style type="text/css">
		.sembunyi {
			display: none !important;
		}
	</style>
</head>
<body>
	<h1>Buat database</h1>
	<hr>
	<form method="post">
		<input type="" value="<?= md5(rand()) ?>" name="tabel" class='sembunyi'>
		<label>Masukkan Nama Kolom</label>
		<input type="" class="kolom" required placeholder="nama, alamat, kelas" name="kolom">
		<input type="submit" value="Buat" name="">
	</form>
	<script type="text/javascript">
		document.querySelector('.kolom').focus()
	</script>
	<?php 
		if ($_POST) {
			$kolom = array_filter(explode(', ', $_POST['kolom']));
			$teks = "CREATE TABLE `database_" . $_POST['tabel'] . "` ( `id` INT NOT NULL AUTO_INCREMENT , ";
			foreach ($kolom as $x) {
				$teks .= "`" . $x . "` TEXT NULL , ";
			}
			$teks .= "PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; ";
			// $teks = "CREATE TABLE 'database_" . $_POST['tabel'] . "' ( 'id' INT NOT NULL AUTO_INCREMENT , 'nama' TEXT NOT NULL , 'kelas' TEXT NOT NULL , 'sekolah' TEXT NOT NULL , PRIMARY KEY ('id')) ENGINE = InnoDB CHARSET=utf8 COLLATE utf_general_ci; ";
			// echo $teks;
			$db->prepare($teks)->execute();
	?>
		<hr>
		<label>ID Tabel</label>
		<input type="" value="<?= $_POST['tabel'] ?>" readonly name="">
		<label>Kolom</label>
		<pre>id, <?= $_POST['kolom'] ?></pre>
	<?php
			// header('Location: ' . $_POST['tabel']);
		}
	?>
</body>
</html>
<!-- 
CREATE TABLE 'database'.'database_kajeiokakdfkafkaj' ( 'id' INT NOT NULL AUTO_INCREMENT , 'nama' TEXT NOT NULL , 'kelas' TEXT NOT NULL , 'sekolah' TEXT NOT NULL , PRIMARY KEY ('id')) ENGINE = InnoDB; 
 -->
