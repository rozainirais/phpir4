<?php
 session_start();
 include("config.php");
?>
<html>
<head>
<h1>Senarai Pelajar Berdaftar</h1>
</head>
<body>
<?php
	$sql	=	"SELECT * FROM user ORDER BY lastname";
	
	$result = mysqli_query($db,$sql);
	//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count > 0){
		echo "<table><tr><th>Id</th><th>Nama</th><th>Emel</th></tr>";
		while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["lastname"]. "<br>";
		echo "<tr><td>".$row["id"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
		}
		echo "</table>";
	}else{
		
		echo "Tiada Rekod";
	}
?>
</body>
</html>
