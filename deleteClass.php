<?php session_start(); ?>
<html>
<head>
<?php include("config.php");?>
</head>
<body>

<?php

$id	=	$_GET["id"];
$sql = "DELETE FROM class
WHERE id = $id ";

if ($db->query($sql) === TRUE) {
    echo "Delete Berjaya<br>";
	//header("location: listApplication.php");//redirect page
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

?>
<a href="listApplication.php">Return</a></br>

</body>
</html> 
