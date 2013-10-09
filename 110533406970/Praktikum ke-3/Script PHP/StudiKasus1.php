<html>
<head>
	<title>Studi Kasus 1 </title>
</head>
<body>
	<h2>Stok Barang</h2>
	<strong>barang:</strong><br>
	<em>Silakan pilih nama barang untuk menampilkan jumlah stok barang dalam gudang</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="barang">
			<option value="biskuit" 
			<?php if (isset($_POST['barang']) && $_POST['barang']=='biskuit') {
				echo "selected";
			} ?>
			>Biskuit rasa ayam pedas manis</option>
			<option value="susu" <?php if (isset($_POST['barang'])&&$_POST['barang']=='susu') {
				echo "selected";
			} ?>>Susu bubu soy bean</option>
			<option value="coklat" 
			<?php if (isset($_POST['barang'])&&$_POST['barang']=='coklat') {
				echo "selected";
			} ?>
			>Coklat Silverquen</option>
			<option value="mie" 
			<?php if (isset($_POST['barang'])&&$_POST['barang']=='mie') {
				echo "selected";
			} ?>
			>Mie Instan Sedap Soto Ayam</option>
			<option value="kecap" 
			<?php if (isset($_POST['barang'])&&$_POST['barang']=='kecap') {
				echo "selected";
			} ?>
			>Kecap Manis ABC</option>
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['barang'])) {
		switch ($_POST['barang']) {
			case 'biskuit':
				echo "<div id='nilai'>Stok Biskuit rasa ayam pedas manis milna : 127 pcs</div>";
				break;

			case 'susu':
				echo "<div id='nilai'>Stok Susu Bubuk Soy Bean : 10 pcs</div>";
				break;

			case 'coklat':
				echo "<div id='nilai'>Stok Coklat Silverquen Golden  : 15 pcs</div>";
				break;

			case 'mie':
				echo "<div id='nilai'>Stok Mie Instan Sedap soto ayam  : 250 pcs</div>";
				break;

			case 'kecap':
				echo "<div id='nilai'>Stok Kecap Manis ABC: 67 pcs</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>