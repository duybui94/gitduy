<?php
include "cau2.php";
session_start();

?>
<form action="" name='login' method="POST">
	<table border="1" cellspacing =0  align="center" width = "300px">
	<tr>
		<th colspan="2" align="center">Đăng Nhập</th>
	</tr>

	<tr>
		<th>Username</th>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td  colspan="2" align="center" ><input type="submit" name="login" value="Login"></td>
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
		if($x['username'] == $username && $x['password'] == $password){
								
							echo "<script language='javascript'>alert('Dang nhap thanh cong');";
							echo "</script>";
							$_SESSION['login'] = $username;
							header('location:cau3.php');
							}else{
					echo "<script language='javascript'>alert('Sau Username hoac Password');";
						echo "</script>";
						
		}
	}

?>