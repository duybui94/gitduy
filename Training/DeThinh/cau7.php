<?php 
	include "cau2.php";
?>
<form action="" name="themdon" method="POST">
<table cellpadding="0" border="1" width="300px" align="center">
	<tr>
		<th align="center" colspan="2">Thêm Thông Tin Đơn Hàng</th>
	</tr>
	<tr>
		<th>Tên Khách </th>
		<td><input type="text" name="tenkhach"></td>
	</tr>
	<tr>
		<th>Số Điện Thoại</th>
		<td><input type="text" name="sodienthoai"></td>
	</tr>
	<tr>
		<th>Địa Chỉ Nhận Hàng </th>
		<td><input type="text" name="diachinhanhang"></td>
	</tr>
	<tr>
		<th>Ghi Chú </th>
		<td><input type="text" name="ghichu"></td>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="themdon" value="Thêm"></th>
	</tr>
</table>
</form>
<?php
//check
	if(isset($_POST['tenkhach'])){
		$tenkhach=$_POST['tenkhach'];
	}
	if(isset($_POST['sodienthoai'])){
		$sodienthoai=$_POST['sodienthoai'];
	}
	if(isset($_POST['diachinhanhang'])){
		$diachinhanhang=$_POST['diachinhanhang'];
	}
	if(isset($_POST['ghichu'])){
		$ghichu=$_POST['ghichu'];
	}
	//Them
	if(isset($_POST['themdon'])){
		$sql="INSERT INTO donhang (tenkhach,sodienthoai,diachinhanhang,ghichu) VALUES ('$tenkhach','$sodienthoai','$diachinhanhang','$ghichu')";
		$run=mysqli_query($conn,$sql);
		if(isset($run)){
			echo "<p align='center'>Them Don Hang Thanh Cong";
		}else{
			echo "<p align='center'>Them Don Hang That Bai";
		}

	}
?>