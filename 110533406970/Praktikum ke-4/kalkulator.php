<!DOCTYPE html>
<html>
<head><title>Operator Aritmatika</title></head>
<body bgcolor="yellow">
<h1><center>OPERATOR ARITMATIKA</center</h1>
<form method = "post">
<table>
<tr>
<td><input type = "number" name ="angka01" value ="" placeholder ="Masukan angka" required></td>
<td><select name="operator" required>
		<option></option>
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
		</select></td>
<td><input type = "number" name = "angka02" value ="" placeholder = "Masukan angka" required></td>

		<?php
		if(isset($_POST['angka01']) or isset($_POST['angka02']) ){
			$angka1 = $_POST['angka01'];
			$angka2 = $_POST['angka02'];
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){
				case "+":
				$hasil = $_POST["angka01"] + $_POST["angka02"];
			break;
			case "-":
				$hasil = $_POST["angka01"] - $_POST["angka02"];
			break;
			case "*":
				$hasil = $_POST["angka01"] * $_POST["angka02"];
			break;
			case "/":
				$hasil = $_POST["angka01"] / $_POST["angka02"];
			break;
			}
			?>
		<td><input type="submit" name="submit" value=" = "></td>
		<td><input type="text" name="hasil" disabled value="<?php echo $hasil;?>"></td>
		
</tr>
</table>
</body>
</html>