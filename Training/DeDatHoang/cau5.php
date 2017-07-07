<?php 
include "cau2.php";
?>
<form action="" name='themtour' method="POST">
	<table cellpadding=0 align="center" width="300px" border="1">
		<tr>
		<th align="center" colspan="2">Thêm Tour</th>
		</tr>
		<tr>
		<th>Tên Tour</th>
		<td><input type="text" name="tentour"></td>
		</tr>
		<tr>
		<th>Tóm Tắt Lịch Trình</th>
		<td><input type="text" name="tomtatlichtrinh"></td>
		</tr>
		<tr>
		<th>Gía</th>
		<td><input type="number" name="gia"></td>
		</tr>
		<tr>
		<th>Thời Gian Xuất Hành</th>
		<td><input type="date" name="thoigianxuathanh"></td>
		</tr>
		<tr>
		<th>Số Ngày</th>
		<td><input type="number" name="songay"></td>
		</tr>
		<tr>
		<th>Tình Trạng</th>
		<td><input type="text" name="tinhtrang" value="Con"></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><input type="submit" name="them" value="Thêm"></td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST['tentour'])){
		$tentour=$_POST['tentour'];
	}
	if(isset($_POST['tomtatlichtrinh'])){
		$tomtatlichtrinh=$_POST['tomtatlichtrinh'];
	}
	if(isset($_POST['gia'])){
		$gia=$_POST['gia'];
	}
	if(isset($_POST['thoigianxuathanh'])){
		$thoigianxuathanh=$_POST['thoigianxuathanh'];
	}
	if(isset($_POST['songay'])){
		$songay=$_POST['songay'];
	}
	if(isset($_POST['tinhtrang'])){
		$tinhtrang=$_POST['tinhtrang'];
	}
	if(isset($_POST['them'])){
		$sql="INSERT INTO tourdulich (tentour,tomtatlichtrinh,gia,thoigianxuathanh,songay,tinhtrang) VALUES('$tentour','$tomtatlichtrinh','$gia','$thoigianxuathanh','$songay','$tinhtrang')";
		$run=mysqli_query($conn,$sql);
		if(isset($run)){
			echo "Them Thành Công";
		}else{
			echo "Them Thất Bại";
		}
		header('location:cau5.php');
	}
?>