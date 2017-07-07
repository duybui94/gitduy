<?php 
	include "cau2.php";
?>
<form action="" method="POST" name="themdetai">
<table align="center" width="300px" cellpadding=0 border="1">
	<tr>
		<th colspan="2">Thêm Đề Tài</th>
	</tr>
	<tr>
		<th>Tên Đề Tài</th>
		<td><input type="text" name="tendetai"></td>
	</tr>
	<tr>
		<th>Tên Người Hướng Dẫn</th>
		<td><input type="text" name="tennguoihuongdan"></td>
	</tr>
	<tr>
		<th>Tên Học Viên</th>
		<td><input type="text" name="tenhocvien"></td>
	</tr>
	<tr>
		<th>Điểm</th>
		<td><input type="number" name="diem"></td>
	</tr>
	<tr>
		<th>Năm Tốt Nghiệp</th>
		<td><input type="date" name="namtotnghiep"></td>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="them" value="Thêm"></th>	
	</tr>
</table>
</form>
<?php
	if(isset($_POST['tendetai'])){
		$tendetai=$_POST['tendetai'];
	}
	if(isset($_POST['tennguoihuongdan'])){
		$tennguoihuongdan=$_POST['tennguoihuongdan'];
	}
	if(isset($_POST['tenhocvien'])){
		$tenhocvien=$_POST['tenhocvien'];
	}
	if(isset($_POST['diem'])){
		$diem=$_POST['diem'];
	}
	if(isset($_POST['namtotnghiep'])){
		$namtotnghiep=$_POST['namtotnghiep'];
	}
	if(isset($_POST['them'])){
		$sql="INSERT INTO detai (tendetai,tennguoihuongdan,tenhocvien,diem,namtotnghiep) VALUES ('$tendetai','$tennguoihuongdan','$tenhocvien','$diem','$namtotnghiep')";
		$run=mysqli_query($conn,$sql);
		if(isset($run)){
			echo "<p align='center'>Them Đề Tài Thành Công<br>";
			echo "<a href='cau5.php'>Click Thêm Tiếp</a>";

		}else{
			echo "Thêm Thất Bại";
		}

	}


	//LIET KE DE TAI
?>

<?php
include "cau2.php"
?>
<table align="center" cellpadding="0" width="50%" border="1">
	<tr>
		<th colspan="9">Liệt Kê Đề Tài</th>
	</tr>
	<tr>
		<td>STT</td>
		<td>Mã Đề Tài</td>
		<td>Tên Đề Tài</td>
		<td>Tên Người Hướng Dẫn</td>
		<td>Tên Học Viên</td>
		<td>Điểm</td>
		<td>Năm Tốt Nghiệp</td>
		<td>Quản Lý</td>
	<?php
		$sql="SELECT * FROM detai";
		$run=mysqli_query($conn,$sql);

	?>
	</tr>
	<?php
		$stt=1;
		while($x=mysqli_fetch_array($run))
		{
	?>
	<tr>

		<td> <?php echo $stt;?></td>
		<td> <?php echo $x['madetai'] ?> </td>
		<td> <?php echo $x['tendetai'] ?> </td>
		<td> <?php echo $x['tennguoihuongdan'] ?> </td>
		<td> <?php echo $x['tenhocvien'] ?> </td>
		<td> <?php echo $x['diem'] ?> </td>
		<td> <?php echo $x['namtotnghiep'] ?> </td>
	<th><a href="cau7.php?id=<?php echo $x['madetai']; ?> "> Edit(Cau7) </a></th>
<?php
$stt++;
}
?>

	</tr>
</table>