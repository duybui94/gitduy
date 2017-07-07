<?php 
	include "cau2.php";
?>
<form action="" method="POST" name="suadetai">
<table align="center" width="300px" cellpadding=0 border="1">

<?php
	if (isset($_GET['id'])){
		$sql="SELECT * FROM detai WHERE madetai=$_GET[id]";
		$run=mysqli_query($conn,$sql);
		$x=mysqli_fetch_array($run)

	?>
	<tr>
		<th colspan="2">Sửa Đề Tài</th>
	</tr>
	<tr>
		<th>Tên Đề Tài</th>
		<td> <input type="text" value=" <?php echo $x['tendetai']; ?>" name="tendetai"> </td>
	</tr>
	<tr>
		<th>Tên Người Hướng Dẫn</th>
		<td><input type="text" name="tennguoihuongdan" value=" <?php echo $x['tennguoihuongdan']; ?>"> </td>
	</tr>
	<tr>
		<th>Tên Học Viên</th>
		<td><input type="text" name="tenhocvien" value=" <?php echo $x['tenhocvien']; ?>"> </td>
	</tr>
	<tr>
		<th>Điểm</th>
		<td><input type="number" name="diem" value="<?php echo $x['diem']; ?>"> </td>
	</tr>
	<tr>
		<th>Năm Tốt Nghiệp</th>
		<td><input type="date" name="namtotnghiep" value="<?php echo $x['namtotnghiep']; ?>"> </td>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="edit" value="Edit"></th>	
	</tr>
<?php
}
?>
</table>
</form>
<?php 
if(isset($_POST['edit'])){
	$tendetai=$_POST['tendetai'];
	$tennguoihuongdan=$_POST['tennguoihuongdan'];
	$tenhocvien=$_POST['tenhocvien'];
	$diem=$_POST['diem'];
	$namtotnghiep=$_POST['namtotnghiep'];
	$sql="UPDATE detai SET tendetai = '".$tendetai."',
							tennguoihuongdan = '".$tennguoihuongdan."',
							tenhocvien= '".$tenhocvien."',
							diem = '".$diem."'
						WHERE madetai=$_GET[id] 	" ;
	$run=mysqli_query($conn,$sql);
	if(isset($run)){
		echo "<p align='center'>Sửa Thành Công<br>";
		echo "<a href='cau5.php'>Click Vào Đây Để Sửa Tiếp</a>";
	}else
	echo "Sửa that bai".mysqli_error($run);
}

						
