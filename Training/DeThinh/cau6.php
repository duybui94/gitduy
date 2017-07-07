<?php
	include "cau2.php";
?>
<form action="" name="tim" method="POST">
<table cellpadding="0" align="center" width="300px" border="1">
	<tr>
		<th align="center" colspan="2">Tim Kiem</th>
	</tr>
	<tr>
		<th>Nhập Nội Dung</th>
		<td><input type="text" name="noidungtimkiem"></td>
	</tr>
	<tr>
		<th align="center" colspan="2"><input type="submit" name="timkiem" value="Tim"></th>
	</tr>
</table>
</form>

<table cellpadding="0" align="center" width="500px" border="1">
	<tr>
		<th align="center" colspan="8">Kết Qủa Tìm Kiếm</th>
	</tr>
	<tr>
		<th>Mã Hàng Hóa</th>
		<th>Tên Hàng Hóa</th>
		<th> Tên Hãng</th>
		<th> Miêu Tả</th>
		<th> Gía Bán</th>
		<th> Số Lượng</th>
		<th colspan="2">Quản Lý</th>
	</tr>

<?php
	if(isset($_POST['timkiem'])){
		$noidungtimkiem=$_POST['noidungtimkiem'];
		if(empty($noidungtimkiem)){
			echo "<p align='center'>Ban Cần Nhập Nội Dung Tìm Kiếm";
		}else{
			$sql="SELECT * FROM hanghoa WHERE  tenhanghoa LIKE '%$noidungtimkiem%' OR tenhang LIKE '%$noidungtimkiem%' OR mieuta LIKE '%$noidungtimkiem%' AND  soluong > 0 ";
			$run=mysqli_query($conn,$sql);
			if(mysqli_num_rows($run)!== ''){
				while ($x=mysqli_fetch_array($run)){
		?>
		<tr>
		<td> <?php echo $x['mahanghoa'] ?></td>
		<td> <?php echo $x['tenhanghoa'] ?></td>
		<td> <?php echo $x['tenhang'] ?></td>
		<td> <?php echo $x['mieuta'] ?></td>
		<td> <?php echo $x['giaban'] ?></td>
		<td> <?php echo $x['soluong'] ?></td>
		<td> <a href="cau7.php?id=<?php echo $x['mahanghoa']; ?>">Thêm Đơn Hàng(câu7)</a> </td>
		</tr>
		<?php
			}
	
	}if(mysqli_num_rows($run) == ''){
		echo "<p align='center'>Không Có Kết Qủa Cho Nội Dung Tìm Kiếm";
}
}
}

?>
</table>