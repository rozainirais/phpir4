<?php
 session_start();
 include("config.php");
?>
<!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"-->
  
<!--script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script-->
<html>
<head>
<h1>Senarai Pendaftaran Kelas</h1>
</head>
<body>
<?php
	$sql	=	"SELECT * FROM class ORDER BY id desc";
	
	$result = mysqli_query($db,$sql);
	//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count > 0){
		echo "<table>
				<tr>
					<th>Id</th>
					<th>Nama Pelajar</th>
					<th>Nama Kelas</th>
					<th>Masa</th>
					<th>Komen</th>
					<th>Tindakan</th>
				</tr>";
		while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["lastname"]. "<br>";
		echo "<tr>
				<td>".$row["id"]."</td>
				<td>".$row["student_name"]."</td>
				<td>".$row["class_name"]."</td>
				<td>".$row["time"]."</td>
				<td>".$row["komen"]."</td>
				<td><a href=\"deleteClass.php/".$row["id"]."\">Delete</a></td>
			</tr>";
		}
		echo "</table>";
	}else{
		
		echo "Tiada Rekod";
	}
?>
</body>

</html>
