<link rel="stylesheet" type="text/css" href="style.css">
<?php
 session_start();
 include("config.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	 $myusername = mysqli_real_escape_string($db,$_POST['username']);
     $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	 
	 $sql	=	"SELECT * FROM user 
				WHERE email='$myusername' AND pass='$mypassword'";
	
	$result = mysqli_query($db,$sql);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];
      
    $count = mysqli_num_rows($result);
	
	if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
 }
?>
<html>
	<head>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<h1>Sistem Pendaftaran Kelas Tambahan</h1>
		<p>Sila login atau daftar baru</p>
	</head>
	<body>
		<form action = "" method = "post">
		  <label>Emel  :</label><input type = "text" name = "username" class = "box"/><br /><br />
		  <label>Kata Laluan  :</label><input type = "password" name = "password" class = "box" /><br/><br />
		  <input type = "submit" value = " Submit "/><br />
        </form>	
			<a href="signup.php">New Student</a>
	</body>
</html>
