<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tugas Studi Kasus 1 Greeting</title>
</head>

<body>

<?php
function ShowGreet($jam)
{

if($jam<=10){echo ': Novia Said --> Selamat Pagi';}
if($jam>=11&&$jam<=14){echo ': Novia Said --> Selamat Siang';}
if($jam>=15&&$jam<=18){echo ': Novia Said --> Selamat Sore';}
if($jam>=19&&$jam<=23){echo ': Novia Said --> Selamat Malam';}
} 
ShowGreet(18);
?>

</body>
</html>