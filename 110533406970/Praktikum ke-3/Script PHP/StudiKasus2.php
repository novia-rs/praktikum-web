<html>
<head>
	<title>StudiKasus 2</title>
</head>
<body>
	<h1>KFC Restoran Cepat Saji</h1>
	<div id='info'>Sistem Informasi objek wisata, situs sejarah, dan oleh-oleh Kota Malang</div>
	<h1>Bukan Cuma Ayam</h1>
	<h3>Paket 1 (Ayam 2 Porsi + Pepsi)			 : 35.000</h3>
	<h3>Paket 2 (Ayam 2 Porsi + Kentang + Pepsi)		 : 45.000</h3>
	<h3>Paket 3 (Ayam 4 Porsi + Pepsi + Milo)	 	 : 65.000</h3>
	<h3>Paket 4 (Ayam 4 Porsi + Pepsi + Milo + Kentang)	 : 85.000</h3>
	
	<em>Pilih paket makanan :</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="paket[]" value="paket1" 
		<?php if (isset($_POST['paket'])) {

			foreach ($_POST['paket'] as $key => $value) {
				if ($value=='paket1') {
					echo "checked";
				}
		}
			
		} ?>
		>Paket 1 (Ayam 2 Porsi + Pepsi)<br>
		<input type="checkbox" name="paket[]" value="paket2" 
		<?php if (isset($_POST['paket'])) {




			foreach ($_POST['paket'] as $key => $value) {
				if ($value=='paket2') {
					echo "checked";
				}
		}
			
		} ?>
		>Paket 2 (Ayam 2 Porsi + Kentang + Pepsi)<br>
		<input type="checkbox" name="paket[]" value="paket3"
		<?php if (isset($_POST['paket'])) {

			foreach ($_POST['paket'] as $key => $value) {
				if ($value=='paket3') {
					echo "checked";
				}
		}
			
		} ?>
		>Paket 3 (Ayam 4 Porsi + Pepsi + Milo)<br>
		<input type="checkbox" name="paket[]" value="paket4"
		<?php if (isset($_POST['paket'])) {

			foreach ($_POST['paket'] as $key => $value) {
				if ($value=='paket4') {
					echo "checked";
				}
		}
			
		} ?>
		>Paket 4 (Ayam 4 Porsi + Pepsi + Milo + Kentang)<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['paket'])) {
		echo "<div id='pilihan'>Anda memilih paket makan sebagai berikut:</div><br/>";
		echo "<ul>";
		foreach ($_POST['paket'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>