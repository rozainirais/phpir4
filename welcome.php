<?php session_start(); ?>
<html>
<head>
<?php include("config.php");?>
</head>
<body>

Selamat Datang <?php echo $_POST["name"]; ?><br>
Emel Anda Adalah: <?php echo $_POST["email"]; ?><br><br>
<?php
$name	=	$_POST["name"];
$email	=	$_POST["email"];
$password	=	$_POST["password"];
$sql = "INSERT INTO `phpir`.`user`
(
`lastname`,
`email`,

`pass`)
VALUES
(
'$name',
'$email',
'$password');
";

if ($db->query($sql) === TRUE) {
    echo "Pendaftaran Anda Berjaya<br>";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

?>
<a href="frontpage.php">Login</a></br>

</body>
</html> 
