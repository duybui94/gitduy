<?php  
	session_start();
	include "cau2.php";
?>
<form action="" name="login" method="POST">
	<table cellpadding="0" border="1" width="300px" align="center">
	<tr>
		<th colspan="2" align="center">Login</th>
	</tr>
	<tr>
		<th>Username</th>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<th>PassWord</th>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
	<th colspan="2" align="center"><input type="submit" name="login" value="Login"></th>
	</tr>
	</table>
</form> 
<?php
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT * FROM admin";
		$run=mysqli_query($conn,$sql);
		$x=mysqli_fetch_array($run);
		if( $username == $x['username'] && $password == $x['password']){
			$_SESSION['login']=$username;
			echo "<script language='javascript'>alert('Dang Nhap Thanh Cong');";
			echo "location='cau3.php' ; </script>";

		}else{
				echo "<script language='javascript'>alert('Sai Username hoac PassWord');";
			echo "location='cau4.php' ; </script>";
		}

	}
?>