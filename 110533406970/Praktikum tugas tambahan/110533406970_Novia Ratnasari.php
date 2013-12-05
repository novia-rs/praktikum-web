<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi Aritmatika</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="number" name="numb1" value="<?php
echo isset($_POST['numb1']) ? $_POST['numb1'] : '' ; 
?>"/>
<select name="operator">
<option value="+"
<?php if (isset($_POST['operator']) && $_POST['operator']=='+') {
				echo "selected";
			} ?>
>+</option>
<option value="-"
<?php if (isset($_POST['operator']) && $_POST['operator']=='-') {
				echo "selected";
			} ?>
>-</option>
<option value="*"
<?php if (isset($_POST['operator']) && $_POST['operator']=='*') {
				echo "selected";
			} ?>
>x</option>
<option value="/"
<?php if (isset($_POST['operator']) && $_POST['operator']=='/') {
				echo "selected";
			} ?>
>/</option>
</select>
<input type="number" name="numb2" value="<?php
echo isset($_POST['numb2']) ? $_POST['numb2'] : '' ; 
?>" />
	<?php
			if(isset($_POST['numb1']) or isset($_POST['numb2']) ){
			$numb1 = $_POST['numb1'];
			$numb2 = $_POST['numb2'];
			}else{
			$numb1 = "0";
			$numb2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){
			case "+":
				$hasil = $_POST["numb1"] + $_POST["numb2"];
			break;
			case "-":
				$hasil = $_POST["numb1"] - $_POST["numb2"];
			break;
			case "*":
				$hasil = $_POST["numb1"] * $_POST["numb2"];
			break;
			case "/":
				$hasil = $_POST["numb1"] / $_POST["numb2"];
			break;
			}
	?>
		<input type="submit" name="samadengan" value="=" />
		<input type="text" name="hasil"  value="<?=$hasil;?>">
</form>
</body>
</html>
