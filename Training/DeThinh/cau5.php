<?php
	include "cau2.php";
?>
<form action="" name="themhanghoa" method="POST">
<table cellpadding="0" border="1" align="center" width="300px">
	<tr>
	<th align="center" colspan="2">Thêm Hàng Hóa</th>
	</tr>
	<tr>
	<th>Tên Hàng Hóa</th>
	<td><input type="text" name="tenhanghoa"></td>
	</tr>
	<tr>
	<th>Tên Hãng</th>
	<td><input type="text" name="tenhang"></td>
	</tr>
	<tr>
	<th>Miêu Tả</th>
	<td><input type="text" name="mieuta"></td>
	</tr>
	<tr>
	<th>Gía Bán</th>
	<td><input type="number" name="giaban"></td>
	</tr>
	<tr>
	<th>Số Lượng</th>
	<td><input type="number" name="soluong"></td>
	</tr>
	<tr>
	<th align="center" colspan="2"><input type="submit" name="them" value="Thêm"></th>
	</tr>
	<tr>
</table>
</form>
<?php
	//CHECK 
	if(isset($_POST['tenhanghoa'])){
		$tenhanghoa=$_POST['tenhanghoa'];
	}
	if(isset($_POST['tenhang'])){
		$tenhang=$_POST['tenhang'];
	}
	if(isset($_POST['mieuta'])){
		$mieuta=$_POST['mieuta'];
	}
	if(isset($_POST['giaban'])){
		$giaban=$_POST['giaban'];
	}
	if(isset($_POST['soluong'])){
		$soluong=$_POST['soluong'];
	}

	if(isset($_POST['them'])){
		$sql= "INSERT INTO hanghoa (tenhanghoa,tenhang,mieuta,giaban,soluong) VALUES ('$tenhanghoa','$tenhang', '$mieuta','$giaban', '$soluong') ";
		$run=mysqli_query($conn,$sql);
		if(isset($run)){
			echo "<p align='center'>Them Thanh Cong";
			echo "<a href='cau5.php'>Click Vào Đây Thêm Tiếp</a>";
		}else{
			echo "Them That Bai";
		}
	}
?>